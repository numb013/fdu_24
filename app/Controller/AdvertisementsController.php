<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AdvertisementsController extends AppController {

    public $uses = array('Advertisement', 'Image');
    public $components = array('Search.Prg', 'Session', 'Master');
    public $presetVars = true;
    public $paginate = array();    
    
    public function admin_index() {
		$this->layout = 'default';
		$this->paginate = array(
			'limit' => 5,
		);
		$this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Advertisement->parseCriteria($this->passedArgs);
                if (empty($this->request->data)) {
			// 初期表示時
			$this->paginate = array(
				'conditions' => array(
				   'delete_flag' => '0'
				 ),
				'order' => array(
					'modified' => 'DESC',
				),
			);
		} else {
			$this->paginate['conditions']['Advertisement.delete_flag'] = '0';
		}



		$datas = $this->paginate();
//		foreach ($datas as $key => $data) {
//			$datas[$key]['Advertisement']['check_personal'] = explode(",", $data['Advertisement']['check_personal']);
//			$datas[$key]['Advertisement']['check_like'] = explode(",", $data['Advertisement']['check_like']);
//		}
		//$this->_getCheckParameter();
         
                
                
                $this->set('datas',$datas);
  }

/**/
/*登録箇所
/*
/*
/*
/*
/*
/**/
  public function admin_add() {
    $this->layout = "default";
    if ($this->request->is(array('post', 'put'))) {
        //画像処理
        if ($this->request->data['Advertisement']['Image']) {
            $this->request->data['Image'] = $this->request->data['Advertisement']['Image'];
            unset($this->request->data['Advertisement']['Image']);
        }

        if ($this->request->data['Image']['error'] == 4) {
          unset($this->request->data['Image']);
        }
      if ($this->Session->read('image')) {
        $Image = $this->Session->read('image');
        $this->request->data['Image'] = $Image;
        $this->Session->delete('image');
      }


      // 仮アップロード
      $now = date("YmdHis");
      $this->request->data['Image'][0]['Image'] = $this->request->data['Image'];
      $finfo = finfo_open(FILEINFO_MIME_TYPE);
      foreach($this->request->data['Image'][0] as $key => $val){
        if(!$val["tmp_name"]) continue;
        if(!empty($val["url"])) continue;
        $files[$key]["name"] = $val["name"];
        // アップロードされたファイルが画像かどうかチェック
        list($mime,$ext) = explode("/",finfo_file($finfo, $val["tmp_name"]));
        if($mime!="image") $err[] = "ファイル{$key} は画像を選択してください";
        if($mime!="image") unset($files[$key]);
        if($mime!="image") continue;
        copy($val["tmp_name"],"files/updir/tmp/" . "{$now}_{$key}.{$ext}");
        $this->request->data['Image']["tmp_name"] = "{$now}_{$key}.{$ext}";
        $this->request->data['Image']["url"] = "/files/updir/tmp/" ."{$now}_{$key}.{$ext}";
      }
      finfo_close($finfo);

      
      $this->Advertisement->set($this->request->data);
      // 2. モデル[ModelName]のvalidatesメソッドを使ってバリデーションを行う。
//      if ($this->Advertisement->validates()) {
//        //画像削除
//        if (!empty($this->request->data['Check'])) {
//          foreach ($this->request->data['Check'] as $key => $Checkd) {
//            if ($Checkd['photo'] != '0') {
//              foreach ($this->request->data['Image'] as $key => $Images) {
//                if ($Images['url'] == $Checkd['photo']) {
//                    unset($this->request->data['Image'][$key]);
//                }
//              }
//            }
//          }
//          if (empty($this->request->data['Image'][0]["name"])) {
//            unset($this->request->data['Image'][0]);
//          }
//          $this->request->data['Image'] = array_merge($this->request->data['Image']);
//        }
//      }

//        $options = array(
//            'fields' => array(
//                    'Advertisement.id','Advertisement.name'
//            ),
//            'conditions' =>
//            array(
//                    'delete_flag' => '0'
//            ),
//            'recursive'  => -1
//        );
//
//        $relatedAdvertisements = $this->Advertisement->find('all', $options);
//
//        foreach ($relatedAdvertisements as $key => $relatedAdvertisement) {
//                $relatedNmae[$relatedAdvertisement['Advertisement']['id']] = $relatedAdvertisement['Advertisement']['name'];
//        }
//        $this->set('relatedNmae', $relatedNmae);
        $this->set('data',$this->request->data);
        $this->render('/Advertisements/admin_confirm');

      }

//        $options = array(
//                'fields' => array(
//                        'Advertisement.id','Advertisement.name'
//                ),
//                'conditions' =>
//                array(
//                        'delete_flag' => '0'
//                ),
//                'recursive'  => -1
//        );
//        $relatedAdvertisements = $this->Advertisement->find('all', $options);
//
//        foreach ($relatedAdvertisements as $key => $relatedAdvertisement) {
//                $related[$relatedAdvertisement['Advertisement']['id']] = $relatedAdvertisement['Advertisement']['name'];
//        }
//        $this->set('related', $related);
//        $this->Session->delete('image');
  }

  /**/
  /*登録DBに登録箇所
  /*
  /*
  /*
  /*
  /*
  /**/

  public function admin_regist() {
		$this->layout = "default";
    if ($this->request->is(array('post', 'put'))) {
        //戻るボタン
        if (isset($this->request->data['back'])) {
        //バリデーションエラーで画像/動画をセッションに保存
echo '<pre>';
print_r($this->request->data);
echo '</pre>';
            
        if (!empty($this->request->data['Image'])) {
            $this->Session->write('image', $this->request->data['Image']);
        }

//echo '<pre>';
//print_r($this->request->data);
//echo '</pre>';
//exit();

//            $options = array(
//                    'fields' => array(
//                            'Advertisement.id','Advertisement.name'
//                    ),
//                    'conditions' =>
//                    array(	
//                    'delete_flag' => '0'
//                    ),
//                    'recursive'  => -1
//            );
//            $relatedAdvertisements = $this->Advertisement->find('all', $options);
//            foreach ($relatedAdvertisements as $key => $relatedAdvertisement) {
//                    $related[$relatedAdvertisement['Advertisement']['id']] = $relatedAdvertisement['Advertisement']['name'];
//            }
//            $this->set('related', $related);
            $this->set('data', $this->request->data);
            $this->render('/Advertisements/admin_add');
        } elseif (isset($this->request->data['regist'])) {

            $data = $this->request->data;

        if (!empty($data['Image'])) {
          $data['Advertisement']['image_flag'] = 1;
            $data['Image']['partner_name'] = 'Advertisement';
        }

        $this->Advertisement->set($data);
        // 2. モデル[ModelName]のvalidatesメソッドを使ってバリデーションを行う。
        if ($this->Advertisement->validates()) {
          $this->Advertisement->save($data['Advertisement']);
            $partner_id = $this->Advertisement->getLastInsertID();
            if (!empty($data['Image'])) {
                $cut = 1;//カットしたい文字数
                $val["url"] = substr( $data['Image']["url"] , $cut , strlen($data['Image']["url"])-$cut );
                $file = new File(WWW_ROOT.$data['Image']["url"]);
                $file->copy(WWW_ROOT."/files/updir/" . $data['Image']["tmp_name"],true);
                $file = new File(WWW_ROOT.$data['Image']["url"]);
                $file->delete();
                $data['Image']["url"] = "/files/updir/" . $data['Image']["tmp_name"];
                $data['Image']["partner_id"] = $partner_id;
                $this->Image->create(false);
                $this->Image->save($data['Image']);
            }
        }

          return $this->redirect(
            array('controller' => 'Advertisements', 'action' => 'admin_index')
          );
        } else {
          $this->set('data',$data);
          $this->render('/Advertisements/admin_add');
        }
      }
    }


/**/
/*編集箇所
/*
/*
/*
/*
/*
/**/
public function admin_edit($id = null){
    // レイアウト関係
    $this->layout = "default";
    //変更処理
  if ($this->request->is(array('post', 'put'))) {

      
    if ($this->request->data['Advertisement']['Image']) {
        $this->request->data['Image'] = $this->request->data['Advertisement']['Image'];
        unset($this->request->data['Advertisement']['Image']);
    }
    //画像がエラーの物削除
    if ($this->request->data['Image']['error'] == 4) {
        unset($this->request->data['Image']);
    } else {
        //$this->request->data['Image'][0]['Image'] = $this->request->data['Advertisement']['Image'];
        unset($this->request->data['Advertisement']['BeforeImage']);
    }

    
     
            
    
    if (empty($this->request->data['Advertisement']['BeforeImage'])) {


      // 仮アップロード
      $now = date("YmdHis");
      $this->request->data['Image'][0]['Image'] = $this->request->data['Image'];
      $finfo = finfo_open(FILEINFO_MIME_TYPE);
      foreach($this->request->data['Image'][0] as $key => $val){
        if(!$val["tmp_name"]) continue;
        if(!empty($val["url"])) continue;
        $files[$key]["name"] = $val["name"];
        // アップロードされたファイルが画像かどうかチェック
        list($mime,$ext) = explode("/",finfo_file($finfo, $val["tmp_name"]));
        if($mime!="image") $err[] = "ファイル{$key} は画像を選択してください";
        if($mime!="image") unset($files[$key]);
        if($mime!="image") continue;
        copy($val["tmp_name"],"files/updir/tmp/" . "{$now}_{$key}.{$ext}");
        $this->request->data['Image']["tmp_name"] = "{$now}_{$key}.{$ext}";
        $this->request->data['Image']["url"] = "/files/updir/tmp/" ."{$now}_{$key}.{$ext}";
      }
      finfo_close($finfo);
    } else {
        $this->request->data['Image'] = $this->request->data['Advertisement']['BeforeImage'];
    }
      $this->Advertisement->set($this->request->data);
      // 2. モデル[ModelName]のvalidatesメソッドを使ってバリデーションを行う。
      if ($this->Advertisement->validates()) {
        $this->Session->write('Image', $this->request->data['Image']);
        $this->set('data', $this->request->data);
        $this->render('/Advertisements/admin_edit_confirm');
      }
    } else {
      //初期処理
      if (isset($id)) {
        $status = array(
        'conditions' =>
          array(
            'Advertisement.id' => $id,
          )
        );
        // 以下がデータベース関係
        $this->request->data = $this->Advertisement->find('first', $status);
        $this->request->data['Image'] = $this->request->data['Image'][0];
        if (!empty($this->request->data['Image'])) {
            $this->Session->write('image', $this->request->data['Image']);
        }
      }
    }
  }


  public function admin_edit_regist(){
      // レイアウト関係
    $this->layout = "default";
    if ($this->request->is(array('post', 'put'))) {
    //戻るボタン
    if (isset($this->request->data['back'])) {
        $Image = $this->Session->read('Image');
        $this->request->data['Image'] = $Image;
        //画像/動画をセッションに保存
        if (!empty($this->request->data['Image'])) {
          $this->Session->write('Image', $this->request->data['Image']);
        }
        $this->set('data', $this->request->data);
        $this->render('/Advertisements/admin_edit');
    } elseif (isset($this->request->data['regist'])) {
        $data = $this->request->data;
        if (!empty($data['Image'])) {
          $data['Advertisement']['image_flag'] = 1;
            $data['Image']['partner_name'] = 'Advertisement';
        }

        $this->Advertisement->set($data);
        // 2. モデル[ModelName]のvalidatesメソッドを使ってバリデーションを行う。
        if ($this->Advertisement->validates()) {
          $this->Advertisement->save($data['Advertisement']);
            $partner_id = $data['Advertisement']['id'];
            if (!empty($data['Image'])) {
                if (!empty($partner_id)) {
                    $status = array(
                      'delete_flag' => 1,
                    );
                    $conditions = array(
                      'partner_id' => $partner_id,
                    );
                    $this->Image->updateAll($status, $conditions);
                    $this->Image->create();
                }

                $cut = 1;//カットしたい文字数
                $data['Image']["url"] = substr( $data['Image']["url"] , $cut , strlen($data['Image']["url"])-$cut );
                $file = new File(WWW_ROOT.$data['Image']["url"]);
                $file->copy(WWW_ROOT."/files/updir/" . $data['Image']["tmp_name"],true);
                $file = new File(WWW_ROOT.$data['Image']["url"]);
                $file->delete();
                $data['Image']["url"] = "/files/updir/" . $data['Image']["tmp_name"];
                $data['Image']["partner_id"] = $partner_id;
                $this->Image->create(false);
                $this->Image->save($data['Image']);
            }
          return $this->redirect( array('controller' => 'Advertisements', 'action' => 'admin_index'));
        } else {
          $this->set('data',$data);
          $this->render('/Advertisements/admin_add');
        }
      }
    }
  }

  /**/
  /*詳細箇所
  /*
  /*
  /*
  /*
  /*
  /**/
  public function admin_detail($id = null){
    // レイアウト関係
    $this->layout = "default";
    if (isset($id)) {
      $status = array(
      'conditions' =>
        array(
          'Advertisement.id' => $id,
          'Advertisement.delete_flag' => 0
        )
      );
      // 以下がデータベース関係
      $datas = $this->Advertisement->find('first', $status);
      if ($datas['Advertisement']['image_flag']) {
        $id = $datas['Advertisement']['id'];
        $status = array(
          'conditions' =>
          array(
            'partner_id' => $id,
            'partner_name' => 'Advertisement',
            'delete_flag' => '0'
          )
        );
        $datas['Image'] = $this->Image->find('all', $status);
      }
      $this->set('data',$datas);
    }
  }

/**/
/*削除箇所
/*
/*
/*
/*
/*
/**/
  public function admin_delete($id = null){
    $this->layout = "default";
    $status = array(
      'delete_flag' => 1,
    );
    $conditions = array(
      'Advertisement.id' => $id,
    );
    $this->Advertisement->updateAll($status, $conditions);
    return $this->redirect( array('controller' => 'Advertisements', 'action' => 'admin_index'));
  }
  
  
  
}
