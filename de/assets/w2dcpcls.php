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
					$this->captcha['459779']='w2dscic3358f996358484fbc58dd14c2d001c0.gif';
					$this->captcha['477362']='w2dsci1a750f9ed0940c69a96f3fe99618ff29.gif';
					$this->captcha['655919']='w2dscie5d5d8a8c6e06a1abe46919c107cd72e.gif';
					$this->captcha['415970']='w2dsci677a9cd77456ce5ca4b5d767ad0fecd0.gif';
					$this->captcha['796216']='w2dsci46da4e49cde5e399eed8a6d1912f8061.gif';
					$this->captcha['590681']='w2dscia868132ec52708883994d6c8d12f3f9a.gif';
					$this->captcha['812096']='w2dsci39dae15ef958accdf001a242c3ec8b62.gif';
					$this->captcha['185913']='w2dsci54a1224692be9ca48cf33763d6d3a245.gif';
					$this->captcha['982521']='w2dsci635f33acc3dee936be8c4d014f47d934.gif';
					$this->captcha['901403']='w2dscicaeb8cfb05aa3775f71412312e9bd28c.gif';
					$this->captcha['818141']='w2dsci8e8fa4d8ee72a742f4d17f6ed6d24ece.gif';
					$this->captcha['247801']='w2dscic4056c324694de6aaf4f2e5f4c4540e3.gif';
					$this->captcha['864337']='w2dsci3cdecff9bc6945dfc6b1f8634df0c076.gif';
					$this->captcha['118023']='w2dsci6038463181784b347960120380e05ace.gif';
					$this->captcha['845930']='w2dsci6fedbf2afb43f7cff06afaba0ef20804.gif';
					$this->captcha['678968']='w2dscib5605135bca79470bf5d7b5312c00960.gif';
					$this->captcha['539991']='w2dsci6876d76eaa27b6d95568b29ccd0f011a.gif';
					$this->captcha['360171']='w2dsci04d87c8d3f1cccb768445fd741183f4d.gif';
					$this->captcha['225480']='w2dsci93fc1af8f8ba56e3e11d49654baa7665.gif';
					$this->captcha['672283']='w2dsci79727d2ae6f8b14ef728b4de7df45497.gif';
					$this->captcha['297204']='w2dsci93657f4e23c555258b03c632f8b744b6.gif';
					$this->captcha['010111']='w2dscic2e201c7158f46810839af5eadbbffab.gif';
					$this->captcha['686588']='w2dsci8c4b73fa1d5a9c4b221fa80248e9cec8.gif';
					$this->captcha['305080']='w2dsciee60ebba3afe747d3143f3352034ec97.gif';
					$this->captcha['020130']='w2dscic7f6e47a0f3452404e70010e536095bc.gif';
					$this->captcha['183686']='w2dsci12524c0cb39688666ce9fdb6ae7a2eac.gif';
					$this->captcha['345099']='w2dscia5b4d2ec92743394851b47eb388b9398.gif';
					$this->captcha['693202']='w2dsci03b8c4fc981c5e4aa47c09a1e0aa333a.gif';
					$this->captcha['730071']='w2dsci9991e06e56e5d9599520c19e149c4c5f.gif';
					$this->captcha['228431']='w2dscic19d8a7a4229c1c4ea6e1fdc99e99724.gif';
					$this->captcha['201013']='w2dscie8535ded1f1005ee98db0a82d3dd6ddd.gif';
					$this->captcha['162882']='w2dsci7b4262e332a659a12f06279f5fb748d7.gif';
					$this->captcha['058191']='w2dscif4c06c16c77477852f886fb637abccc7.gif';
					$this->captcha['123046']='w2dsci78f39b1172636197dd50fe99ef804fd7.gif';
					$this->captcha['696408']='w2dsci195c172d5510e900327c61abd03f122c.gif';
					$this->captcha['945809']='w2dsci9b4fb958a91b045f3b5990b5e12a9ed7.gif';
					$this->captcha['931249']='w2dsciec1589c1b7e06daf75d51fa9c4cb9b6c.gif';
					$this->captcha['888830']='w2dsci6577d01efe273c344a90e2950704f366.gif';
					$this->captcha['041672']='w2dsci99cc61973fe6fdc08ebaa4840960127c.gif';
					$this->captcha['462760']='w2dscie06c9cb2c65ca1517b64b3eb7c090805.gif';
					$this->captcha['980407']='w2dsci298109395f1473e7aac8647741507273.gif';
					$this->captcha['062405']='w2dsci4c58f5b9ec43da3546fd66122a935827.gif';
					$this->captcha['468494']='w2dsci9bc79127cea265777a8338e139e709f3.gif';
					$this->captcha['177115']='w2dsci83d9805cf9f89df78410d3aa0cae7665.gif';
					$this->captcha['226969']='w2dscic593500e7e260f28162bd299318abaaa.gif';
					$this->captcha['373570']='w2dsci80876dcb3179db1e56747af1899d459d.gif';
					$this->captcha['148749']='w2dscif36a5113d59ad7ab8c2fc1cfca139a73.gif';
					$this->captcha['586981']='w2dscie18c1f63ddee7b653fd8f99f960616bc.gif';
					$this->captcha['726965']='w2dscib9242fcced1e8855f3e307c8cf225877.gif';
					$this->captcha['268184']='w2dsci16cedea71da56b334aef4991e00218c5.gif';
					$this->captcha['086221']='w2dscicec0b621b311d2905ff1cac3c2cf0ebc.gif';
					$this->captcha['580296']='w2dsci088cc3b0fd1c697e433c78246f51c4a2.gif';
					$this->captcha['926255']='w2dsci20384da2a05fa0b327b28b742f309c34.gif';
					$this->captcha['686434']='w2dsci035cd51219f09d1708881ea615ee55d7.gif';
					$this->captcha['757717']='w2dscidcd598f7df9250334c021cda2b07c254.gif';
					$this->captcha['539325']='w2dsci4d0f02c96a5be76ab2a683f71dc5ccd6.gif';
					$this->captcha['859569']='w2dsci2fb5c17b0a58a6de667c7b9ee085cc99.gif';
					$this->captcha['744164']='w2dsci277ed77d53bb327003dbdf77d74f676c.gif';
					$this->captcha['184540']='w2dsci002df981e83b0d99be5805e281d590cd.gif';
					$this->captcha['137835']='w2dsci62d2bf581c0b59d6e8e3a11b6ab8e3b2.gif';
					$this->captcha['664054']='w2dscic313e16691066a0bd0f77c8eef46584d.gif';
					$this->captcha['441376']='w2dsci91dd929d3fd0762d2e9ed77f1c5c1132.gif';
					$this->captcha['134997']='w2dsci89bc4a6bf73e911233948709674df27b.gif';
					$this->captcha['933748']='w2dscifce4d0c2dac4196ab96216aff7ed3e92.gif';
					$this->captcha['434252']='w2dsci9408f47663791efdb1c6c38f008c0680.gif';
					$this->captcha['662223']='w2dscia57a1963f45f4c813918dd1336da0d2c.gif';
					$this->captcha['282857']='w2dsci354759340584fbc0c0704494b333173c.gif';
					$this->captcha['695374']='w2dsci10a08bd1b5eb8622ec94a3209e2c518f.gif';
					$this->captcha['075620']='w2dsci104af5227381c05e415a4893a832ec14.gif';
					$this->captcha['080473']='w2dsci35d462196150b58557cf5c7d10e1b829.gif';
					$this->captcha['070198']='w2dscieba6396ae806535966755aebc8cd9a01.gif';
					$this->captcha['770248']='w2dscicebd7e07077809d2b9c1da7b41626ad0.gif';
					$this->captcha['682701']='w2dsci310225c3747ab2ba204707dd6f0e6b40.gif';
					$this->captcha['138204']='w2dsci4318f3fc4525a762f09b88cd4c16b2bc.gif';
					$this->captcha['939098']='w2dsci53d1cc3a6ee5683c0ecd7841363fd45c.gif';
					$this->captcha['484602']='w2dsci3a14774c9f5015d43f79a71ebbc84f0c.gif';
					$this->captcha['697573']='w2dsci5eba04af02827bf88e5b517abdf6de2d.gif';
					$this->captcha['509182']='w2dscia2f4d767278c3649956ae508d8119ada.gif';
					$this->captcha['563323']='w2dsci901fd1e8881fdab28d9f7d5353d564b8.gif';
					$this->captcha['722593']='w2dsci8c1e5aa687cfca3ed80e7d46e0e6d1c2.gif';
					$this->captcha['583616']='w2dsci328d435ab79295d10326ab20e1c44f83.gif';
					$this->captcha['845874']='w2dscid69a20bca3093f6d4594750c8772c849.gif';
					$this->captcha['711183']='w2dsci6684de0e1c0e6c5a7f0c9cd8df977a05.gif';
					$this->captcha['600064']='w2dsci690a28cba87e6910002e7a2aac1bbfa9.gif';
					$this->captcha['551217']='w2dscia259d73b0fe1994dd18c12e8c1f5ed4c.gif';
					$this->captcha['148279']='w2dsci48262d35d6139a0e190c32c7cbe98d20.gif';
					$this->captcha['498524']='w2dscif9a4c870fd406d187ba049a2ef834175.gif';
					$this->captcha['001171']='w2dsci84ca9e5e59dccafaae76800f4fc923fd.gif';
					$this->captcha['330173']='w2dscid63242bf02aaaedcf08d68c970457028.gif';
					$this->captcha['377885']='w2dsci7b150f6fb52a0977a0c38c6b09fa2814.gif';
					$this->captcha['423454']='w2dsci31e5de249f83f1fe28ead5a5c26c7e2a.gif';
					$this->captcha['771555']='w2dsci0bf9dd128b24fac9b512557137906f69.gif';
					$this->captcha['460890']='w2dsci615050f593b74fc9898ce6b92552964f.gif';
					$this->captcha['959252']='w2dsci171a453d7850bf5f003f34adc06852f8.gif';
					$this->captcha['931834']='w2dsci21f2401dc21a9516c406be062f0df5b0.gif';
					$this->captcha['893701']='w2dscib1c3680540a8a1a3c4bd936834f9085a.gif';
					$this->captcha['789010']='w2dsci53b86d73b6f9fd8993c76e9ba58d07ee.gif';
					$this->captcha['738021']='w2dscibe10d09931e24723cdeb08d2065f1cfa.gif';
					$this->captcha['521771']='w2dsci6c47afac0ed95075190103936b3b3445.gif';
					$this->captcha['213250']='w2dsci71fea207d994d38dd26c911a3201ffcc.gif';
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
