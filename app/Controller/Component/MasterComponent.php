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
			'1' => 'デザイン・アート系職業',
			'2' => 'ものつくり・製造系職業',
			'3' => 'IT系職業',
			'4' => 'エンタメ・芸能系職業',
			'5' => '食べ物・フード系職業',
			'6' => '美容系職業',
			'7' => '販売系職業',
			'8' => '建築・現場系職業',
			'9' => '出版・広告系職業',
			'10' => '金融・ビジネス系',
			'11' => 'スポーツ系職業',
			'12' => '国際的職業',
			'13' => '音楽・音響系職業',
			'14' => '教育系職業',
			'15' => '福祉・医療系職業',
			'16' => '公務員系職業',
			'17' => 'ビジネス系職業',
			'18' => 'その他',
		);
	}

}
