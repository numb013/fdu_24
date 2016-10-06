<?php
App::uses('Component', 'Controller');
class MasterComponent extends Component {
	public $uses = array('Profession', 'Image', 'Movie' ,'CheckLike', 'CheckPersonal');

	public $components = array('Session');

	// ===== マスタ情報取得系 =====


/**
 * 都道府県のKeyValueリスト取得
 *
 * @return array 都道府県のKeyValueリスト
 */
	public function getCheckPersonals() {
		$CheckPersonal = ClassRegistry::init('CheckPersonal');
		$check_personals = array();
		$personals = $CheckPersonal->find('all',
				array(
					'fields' => array('*'),
					'conditions' => array('delete_flag' => 0),
					'order' => array('id' => 'asc'),
				)
		);
		foreach ($personals as $key => $personal) {
			$check_personals[$personal['CheckPersonal']['id']] = $personal['CheckPersonal']['name'];
		}
		return $check_personals;
	}


/**
 * 都道府県のKeyValueリスト取得
 *
 * @return array 都道府県のKeyValueリスト
 */
	public function getCheckLikes() {
		$CheckLike = ClassRegistry::init('CheckLike');
		$check_likes = array();
		$likes = $CheckLike->find('all',
				array(
					'fields' => array('*'),
					'conditions' => array('delete_flag' => 0),
					'order' => array('id' => 'asc'),
				)
		);
		foreach ($likes as $key => $like) {
			$check_likes[$like['CheckLike']['id']] = $like['CheckLike']['name'];
		}
		return $check_likes;
	}


/**
 * 都道府県のKeyValueリスト取得
 *
 * @return array 都道府県のKeyValueリスト
 */
	public function getLikeChecks() {
		$CheckLike = ClassRegistry::init('CheckLike');
		$like_checks = array();
		$likes = $CheckLike->find('all',
				array(
					'fields' => array('*'),
					'conditions' => array('delete_flag' => 0),
					'order' => array('id' => 'asc'),
				)
		);
		foreach ($likes as $key => $like) {
			//echo pr($like);
			//exit();
			if ($like['CheckLike']['like_genre'] == '1') {
				$like_checks['1'][$like['CheckLike']['id']] = $like['CheckLike']['name'];
			} elseif($like['CheckLike']['like_genre'] == '2') {
				$like_checks['2'][$like['CheckLike']['id']] = $like['CheckLike']['name'];
			} elseif($like['CheckLike']['like_genre'] == '3') {
				$like_checks['3'][$like['CheckLike']['id']] = $like['CheckLike']['name'];
			} elseif($like['CheckLike']['like_genre'] == '4') {
				$like_checks['4'][$like['CheckLike']['id']] = $like['CheckLike']['name'];
			} elseif($like['CheckLike']['like_genre'] == '5') {
				$like_checks['5'][$like['CheckLike']['id']] = $like['CheckLike']['name'];
			} elseif($like['CheckLike']['like_genre'] == '6') {
				$like_checks['6'][$like['CheckLike']['id']] = $like['CheckLike']['name'];
			}
			//$check_likes[$like['CheckLike']['id']] = $like['CheckLike']['name'];
		}
		return $like_checks;
	}


/**
 * 案件タイプリスト取得(通知メール用に短いもの)
 *
 * @return array 案件タイプリスト(短)
 */
	public function getCheckSex() {
		// OppKindsMaster.phpと対応させる
		return array(
			'1' => 'MAN',
			'5' => 'GIRL'
		);
	}


/**
 * 契約形態リスト取得
 *
 * @return array ジャンル
 */
	public function getlikeGenre() {
		return array(
			'1' => '性格',
			'2' => 'タイプ',
			'3' => '好き・得意',
			'4' => '好きな教科',
			'5' => '苦手な事(その１)',
			'6' => '苦手な事(その２)',
		);
	}

/**
 * 契約形態リスト取得
 *
 * @return array ジャンル
 */
	public function getGenre() {
		return array(
			'1' =>  '医療',
			'2' =>  '心理・福祉・リハビリ',
			'3' =>  '美容・ファッション',
			'4' =>  '旅行・ホテル',
			'5' =>  '飲食',
			'6' =>  '教育・保育',
			'7' =>  '自然・動物',
			'8' =>  '運輸・乗り物',
			'9' =>  '出版・報道',
			'10' => 'テレビ・映画',
			'11' => '音楽・ラジオ',
			'12' => '芸能',
			'13' => 'スポーツ',
			'14' => 'マンガ・アニメ・ゲーム',
			'15' => '広告・デザイン',
			'16' => 'コンピューター',
			'17' => '保安',
			'18' => '法律',
			'19' => '国際',
			'20' => '金融・会計',
			'21' => '事務',
			'22' => '建築・インテリア',
			'23' => 'オフィス',
			'24' => '公務員',
			'25' => '葬祭・宗教',
			'26' => 'その他',
		);
	}

}
