<?php

//////////////////////////////////////////////////////////////////////////////////////////
///
/// SIQUANDO Shop 9
/// SIQUANDO GmbH & Co. KG
/// Autor: Volker Sauer, Am Bugapark 183, 45899 Gelsenkirchen
///
/// $Id: captcha_class.ccml 564 2018-04-25 10:19:44Z volker $
///
//////////////////////////////////////////////////////////////////////////////////////////

class captchaticket {
	var $code;
	var $timestamp;
}

class captchas {
	var $captcha;
	var $imagespath;
	var $datapath;

	var $datafile='captchadata.php';
	var $copperplate="<?php die(\"Made with SIQUANDO Web.\"); ?>";

	function __construct() {
		$this->captcha=array();
					$this->captcha['275603']='w2dsci41c2af80d1b0d51f82aef14f77ad0ce7.gif';
					$this->captcha['937335']='w2dsciec49bae5b29cea2e2fa36c8fe897f1b6.gif';
					$this->captcha['778718']='w2dscif838bd5ff6705193399fb79dceb57103.gif';
					$this->captcha['551755']='w2dscibb372124481dea8eb124e0983a6442fb.gif';
					$this->captcha['597451']='w2dscib3c788f3dced9b8eab416205eeaac4eb.gif';
					$this->captcha['121271']='w2dsci3b299b99387a847b3d34f82c6839f877.gif';
					$this->captcha['334370']='w2dscia7b946c4d6d96c7d240314d455a8fff1.gif';
					$this->captcha['837016']='w2dsci25b4b68380c75538c8e507f5811256c0.gif';
					$this->captcha['826359']='w2dsci8baf78282afb17afaf1252fbaec688d8.gif';
					$this->captcha['947312']='w2dsci8defb5f8e611d7d14e2794e3ae2bda8c.gif';
					$this->captcha['383017']='w2dscif93900873eedd7b6a12ab8a1eb952e27.gif';
					$this->captcha['615275']='w2dsci2f3258deac57b8d9f9bd9a13c44240fa.gif';
					$this->captcha['493697']='w2dscidcf8b2ef261440acd38aa12d65d5384e.gif';
					$this->captcha['140007']='w2dsci3851f3917eccb4b156c36a7c7a4add37.gif';
					$this->captcha['417521']='w2dscidc05fa42f63438585d7a80aaa3c36dd8.gif';
					$this->captcha['379388']='w2dsci7799c547755158f53f929361e33bbd35.gif';
					$this->captcha['991068']='w2dsci569d7b2709fe9e386610004b731e10c8.gif';
					$this->captcha['571242']='w2dsciad9e7bd83b2a444706b5599f7ce071cf.gif';
					$this->captcha['187208']='w2dsci6ada1f8e71231086a2863c5db50a28a2.gif';
					$this->captcha['878685']='w2dscid3063999f387b00b850a503033fdf337.gif';
					$this->captcha['726979']='w2dsci80003e3f53474ec257c7a04165953fee.gif';
					$this->captcha['285085']='w2dsci490e7706cb794a4584a3c07b9f27eb17.gif';
					$this->captcha['742859']='w2dsci47bdb89bad49465a3c30910ff8cca2b7.gif';
					$this->captcha['606025']='w2dsci2ac3ca8ecf102d185855953f0a5de87e.gif';
					$this->captcha['541824']='w2dsci67619542d570688ee17277be43025288.gif';
					$this->captcha['023298']='w2dsci032c30ec6c43e71a1547188a950b4c1e.gif';
					$this->captcha['377444']='w2dsci745ed2e94d0c22eb4d1a12f71d8457b5.gif';
					$this->captcha['970221']='w2dsci99e7cf5d1f85b7f0c53f7c103b2b5692.gif';
					$this->captcha['556697']='w2dscibe1300c1dfe166ed3fa1fa657201e9b0.gif';
					$this->captcha['342335']='w2dscifcc326598c4efe4d361161e6a8de1a2c.gif';
					$this->captcha['654135']='w2dscid1ea9150c6c7d352995058bd40e3fe09.gif';
					$this->captcha['976522']='w2dsci80761d994d7cdb3061197f1f329a129a.gif';
					$this->captcha['717032']='w2dsci94af3acd8cd1d532f27abdb73307a901.gif';
					$this->captcha['121105']='w2dsci947a0f4ca01e93b070abbac15e0b3e66.gif';
					$this->captcha['707452']='w2dsci8f588f566a822b5c9b4523bc8397aa1c.gif';
					$this->captcha['563649']='w2dscia9cd4292d3fb979e98232948ee73fbfb.gif';
					$this->captcha['867005']='w2dsci997a60f7ebba3f24448bb0aa73be484c.gif';
					$this->captcha['575243']='w2dscie668f6f637117caaecde8218c6cada49.gif';
					$this->captcha['530682']='w2dsci1c9c284095a9ab45accf4b5d626011a1.gif';
					$this->captcha['848911']='w2dsciaa5674a8c7e79d7a774f97d122e221d2.gif';
					$this->captcha['095913']='w2dsci0ffdeacefdb39d43ced9e5e1279c8d8f.gif';
					$this->captcha['401284']='w2dscibcc55333e49eb41c31e9cd75ddbe8e6b.gif';
					$this->captcha['167892']='w2dscid3066ade084b8756693419a0cc6525f9.gif';
					$this->captcha['511324']='w2dsci13bafa5ec8359ee4396020ca8827d46e.gif';
					$this->captcha['994940']='w2dscieeeffeb3be3440df6b02a70ae4462585.gif';
					$this->captcha['748336']='w2dsci0b4242df62efae113e4e9bb8deeeecc6.gif';
					$this->captcha['884036']='w2dsci75c233a4914b454b756689b4760cc32b.gif';
					$this->captcha['103563']='w2dscic1a482b1c7576e19f99887c372d81655.gif';
					$this->captcha['204591']='w2dsci733c95788cc02c2bef024a650d8c1ebc.gif';
					$this->captcha['990485']='w2dsci07fdb8f2dd6afe8fa2307da746e38bc9.gif';
					$this->captcha['473974']='w2dscie64a503dfe5a12c06f10bd8fd59dc233.gif';
					$this->captcha['813248']='w2dsci4f2321cf8a3bedd400d93a93b8dadbf5.gif';
					$this->captcha['824658']='w2dsci5b289a6b7870ea2158905b1865856ebb.gif';
					$this->captcha['177045']='w2dscifcb5a991d4bb3ea08bccd9242b9bb2d1.gif';
					$this->captcha['883141']='w2dsci6caa1e3b584b292660e0ade409f759d6.gif';
					$this->captcha['098511']='w2dscia723975525f197a270ff5977f1b43560.gif';
					$this->captcha['927223']='w2dscie62fd2b48ffa32a19167d6599a709224.gif';
					$this->captcha['614415']='w2dsci1d7f3ad2156ceaedf5e3ca6e37bf037e.gif';
					$this->captcha['836085']='w2dscib0bda2def340b53d9a5f036e718b00dd.gif';
					$this->captcha['076659']='w2dsci2bb80463d86701e1de96d595d89dbd2d.gif';
					$this->captcha['942095']='w2dscidf10ee1ba7a4d0f7528ea7764e49b8ea.gif';
					$this->captcha['522015']='w2dsci27264dd22aa90e18e57df968a928f5c6.gif';
					$this->captcha['966292']='w2dscic3675bb912e3788cc6fa12fa540ee8fe.gif';
					$this->captcha['640881']='w2dsci903035469402acb4e42c5771b60ec242.gif';
					$this->captcha['892041']='w2dscia673fcefcb3f93550aeecdc378434571.gif';
					$this->captcha['480533']='w2dscib9fc3fcc8cfd310966dba3967d58a99f.gif';
					$this->captcha['882463']='w2dscib34d7bbc692acf8e5744f31dfed0306b.gif';
					$this->captcha['726117']='w2dsci43ccf4985939db3d4817b8235fdeac50.gif';
					$this->captcha['655968']='w2dsci59b16c36f6c079996d7f34bdf9ca4075.gif';
					$this->captcha['810953']='w2dsci15d706a030a45c66fc9aac2dcc9f893b.gif';
					$this->captcha['319646']='w2dscic1cbe1391ab8bd3fc162d12a5b44719e.gif';
					$this->captcha['895534']='w2dsci79246fafddc0dbfb88427b3cc1c0e447.gif';
					$this->captcha['442799']='w2dsci7aac84e11f0fa28b5601f725b235a654.gif';
					$this->captcha['932588']='w2dsci762e67c84db1851a3e0deb278202447e.gif';
					$this->captcha['072700']='w2dscic791ce6aa9c49d30f86251b7671c56ca.gif';
					$this->captcha['231715']='w2dsci0ab8839dbd3eaf18fd7fe44f3232a1bf.gif';
					$this->captcha['341826']='w2dsci764befd96e1b301f09dc7c5e56428326.gif';
					$this->captcha['398110']='w2dsci08715970905c8c252a5091bfe779a92f.gif';
					$this->captcha['059046']='w2dsci792810ffa884204d1aa5187e86849166.gif';
					$this->captcha['094156']='w2dsci0aba1d0a103cc3052dfd9d48143c485e.gif';
					$this->captcha['263757']='w2dsci108200ae474677dc7102a24af29bc859.gif';
					$this->captcha['212768']='w2dsci0c9739d13fc59aa75029b3a6a831f597.gif';
					$this->captcha['743528']='w2dscif0197fd20eaad640bd1a83028d1c295a.gif';
					$this->captcha['593453']='w2dsciad60ced82a7014db5b95f3f3b7a0832b.gif';
					$this->captcha['999669']='w2dsci8522cb93c09d0d3f06fa3864a5ee5768.gif';
					$this->captcha['957251']='w2dsci700767a73ed18ec16505fabdf7b28bee.gif';
					$this->captcha['384384']='w2dsci372f45ce380230b51933928a9f706067.gif';
					$this->captcha['878715']='w2dsci868f1e6ab230c6c73df75c3b9b59572e.gif';
					$this->captcha['256591']='w2dsci7d722859889ba2faa660ab2a30fb8ee8.gif';
					$this->captcha['222745']='w2dsci58aae09254fde2efde0f1d5ee53335bf.gif';
					$this->captcha['165454']='w2dsciad6c98c33660a873fbf22b8227b57712.gif';
					$this->captcha['684988']='w2dscib22c62d49a74dd1d3dad390a32d41041.gif';
					$this->captcha['271464']='w2dscib4e7c00be495878c9da8ac94d4cc676a.gif';
					$this->captcha['804111']='w2dsci0e4705f19c4cee77baf39a160bac6c00.gif';
					$this->captcha['295660']='w2dsci6182917a59c5eae110b886005ecbb6ce.gif';
					$this->captcha['691289']='w2dscie7d4ba2eb2f05ed970a01b0027965563.gif';
					$this->captcha['221411']='w2dsci6729a7a2d854ec469a822f743e08e3e7.gif';
					$this->captcha['088863']='w2dsci3677137e7368ac98f25f1a3773488cf6.gif';
					$this->captcha['980142']='w2dsci2bc40c36819d7bf000e8a8be2983c6f0.gif';
					$this->captcha['622166']='w2dscid0549b289369213358501d3073a77edc.gif';
			}

	function getpicture($id) {
		$offset=rand(1,98);

		$i=0;
		
		foreach($this->captcha as $code => $filename)
		{
			$i++;
			if ($i>=$offset) break;
		}
		
		if (file_exists($this->imagespath.$filename)) {
			$fp=fopen($this->imagespath.$filename,'r');
			if ($fp) {
				header('Content-type: image/gif');
				fpassthru($fp);
				fclose($fp);
				$this->storeticket($id,$code);
			}
		}
	}

	function storeticket($id,$code) {
		$ticketsin=Array();
		$ticketsout=Array();

		$filename=$this->datapath.$this->datafile;

		if (file_exists($filename)) {
			$fp=fopen($filename,'r');
			flock($fp,1);
			fread($fp, strlen($this->copperplate));
			$data = fread($fp, filesize($filename));
			flock($fp,3);
			fclose($fp);
			$ticketsin=unserialize($data);

			foreach ($ticketsin as $key => $value) {
				if ((time()-$value->timestamp)<60*60) {
					$ticketsout[$key]=$value;
				}
			}
		}

		$ticketsout[$id]=new captchaticket();
		$ticketsout[$id]->code=$code;
		$ticketsout[$id]->timestamp=time();

		$fp=fopen($filename,'w');
		flock($fp,2);
		fputs($fp, $this->copperplate);
		fputs($fp,serialize($ticketsout));
		flock($fp,3);
		fclose($fp);
	}

	function checkticket($id,$code, $remove = true) {
		$ticketsin=Array();
		$ticketsout=Array();
		$success=false;
		$filename=$this->datapath.$this->datafile;

		if (file_exists($filename)) {
			$fp=fopen($filename,'r');
			flock($fp,1);
			fread($fp, strlen($this->copperplate));
			$data = fread($fp, filesize($filename));
			flock($fp,3);
			fclose($fp);
			$ticketsin=unserialize($data);
			if (array_key_exists($id,$ticketsin)) {
				if ($ticketsin[$id]->code==$code) {
					$success=true;
					if ($remove)
						$this->removeticket($id);
				}
			}
		}
		return $success;
	}

	function removeticket($id) {
		$ticketsin=Array();
		$ticketsout=Array();
		$filename=$this->datapath.$this->datafile;

		if (file_exists($filename)) {
			$fp=fopen($filename,'r');
			flock($fp,1);
			fread($fp, strlen($this->copperplate));
			$data = fread($fp, filesize($filename));
			flock($fp,3);
			fclose($fp);
			$ticketsin=unserialize($data);
			if (array_key_exists($id,$ticketsin)) {
				foreach ($ticketsin as $key => $value) {
					if ($key!=$id) {
						$ticketsout[$key]=$value;
					}
				}
				$fp=fopen($filename,'w');
				flock($fp,2);
				fputs($fp, $this->copperplate);
				fputs($fp,serialize($ticketsout));
				flock($fp,3);
				fclose($fp);
			}
		}
	}
}
?>
