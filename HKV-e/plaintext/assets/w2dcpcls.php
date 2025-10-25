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
					$this->captcha['920756']='w2dsci565714f87c77e293b0018798a16b2663.gif';
					$this->captcha['569248']='w2dscie830593d30e63b7fb5d0208e0cda2608.gif';
					$this->captcha['576116']='w2dscif27722cf03ec62e4857491eb35b582b0.gif';
					$this->captcha['014349']='w2dsci295388ca57ed7e4ee26ab209b5c3bb06.gif';
					$this->captcha['270178']='w2dsci709bcb5eb858595f4aa3186b79a1fc69.gif';
					$this->captcha['778132']='w2dscie0ef28cc6dad130d3d362f9fe0ed6980.gif';
					$this->captcha['038247']='w2dscif74df59ab0a5d3e016fbf955c7eb6df2.gif';
					$this->captcha['879856']='w2dscieeb1cdd947b9dd0f16ed6002fb09c9f6.gif';
					$this->captcha['783738']='w2dsci087b29179d15c52209c1acc2f92e4f7f.gif';
					$this->captcha['217684']='w2dscif3301d23f6aff284c30bce1f0e82a35c.gif';
					$this->captcha['985500']='w2dsci41e59c559b84ac0c6907ecf511f52aa6.gif';
					$this->captcha['882953']='w2dscibf1372747248d694bbd096fb6049ff60.gif';
					$this->captcha['550731']='w2dscie734de1f85f0a9d5349541be8a5877cb.gif';
					$this->captcha['435327']='w2dscib0a377e253c0b66ee5e5d9e70e85fc2e.gif';
					$this->captcha['875701']='w2dsci7e3816809db9f5b6674244dc59b5b456.gif';
					$this->captcha['176532']='w2dsci2adcb08baf216856177bad046a8e9ceb.gif';
					$this->captcha['995719']='w2dscif7ee83133c07875c163f0dbedf9b2824.gif';
					$this->captcha['120574']='w2dsci8866027bf125a6935c2007aac143e25b.gif';
					$this->captcha['930040']='w2dsci1e2830cee5939e5562da0634042e7f89.gif';
					$this->captcha['960481']='w2dscia57afbee371a84abd8ac641a2e87bd0f.gif';
					$this->captcha['576829']='w2dscia91f2bbdee6856cfb8e5c9bf6c502e6e.gif';
					$this->captcha['003226']='w2dscib03534d6d482a9ada75a3855101dbf67.gif';
					$this->captcha['065938']='w2dsci1a1ec62dcec47e8741d854ea92a5c3ea.gif';
					$this->captcha['594300']='w2dscie4702ba0a1a3ebf481b7cd38325b7405.gif';
					$this->captcha['532468']='w2dsci418112857b342c2305df5d237ce6a8d6.gif';
					$this->captcha['558622']='w2dscifd556a54df8ba3042bf10af029adc8d0.gif';
					$this->captcha['106270']='w2dsci15ca9787290c77e206439d496154a382.gif';
					$this->captcha['099289']='w2dscid9b44152083cb2a49f3c5f67508fb577.gif';
					$this->captcha['685509']='w2dscia615826f58460fddbc56b6bdba4241f2.gif';
					$this->captcha['930623']='w2dscic5727bb38dbce9ec30624661978f0ab6.gif';
					$this->captcha['963207']='w2dscifac2d0ea7866a46c931961409142dd98.gif';
					$this->captcha['508712']='w2dsci9e568d1ec98c6764a6ef11c64c256d11.gif';
					$this->captcha['837527']='w2dsci84fb092f8f82de6997b6b1b39925b328.gif';
					$this->captcha['443997']='w2dsci25fa4564ccb18f331ba66ca26d9deae8.gif';
					$this->captcha['171904']='w2dsci0fb581b826d1c4b49e87e0a5d9133463.gif';
					$this->captcha['562864']='w2dsci98cac909b1887cb897145412fe5f3fc8.gif';
					$this->captcha['539732']='w2dscia74e89d1aca01b7d139b1e97985b946b.gif';
					$this->captcha['801989']='w2dsci7a4cb5ea9d019bdb1ba99a4355d857ac.gif';
					$this->captcha['307801']='w2dsciedff0507ab98e6c126f084fbe953ac57.gif';
					$this->captcha['196683']='w2dsci516253a72256f9d8a108f8c6c3219532.gif';
					$this->captcha['495370']='w2dsci3b6e8b424dfddd91f94a781e2f84b718.gif';
					$this->captcha['208276']='w2dscid725f550e809c1941687e27c34f2244b.gif';
					$this->captcha['558521']='w2dscib99f977751a53be7bc5972f4ee335929.gif';
					$this->captcha['701671']='w2dsci03666d1135e613907fdf5c02596e77d1.gif';
					$this->captcha['858799']='w2dscie49e0f79d7d3d21184def9f09fc41284.gif';
					$this->captcha['811967']='w2dsci19c1e6adce639257e7e2093613ad1113.gif';
					$this->captcha['973381']='w2dsci32486a2bc041b01608d6a2936370bb4a.gif';
					$this->captcha['553171']='w2dsci249f340d2667bf7379289999a73a00d3.gif';
					$this->captcha['358351']='w2dscid65e763eae15bcf7d0cbf0458388e3b6.gif';
					$this->captcha['265526']='w2dscid03de48eccaff74743df751cdcc7dab0.gif';
					$this->captcha['027719']='w2dsci664d5953242407f0ae8fd0551ca72e97.gif';
					$this->captcha['547510']='w2dscib3dffa3020279e1131b2b43337292baf.gif';
					$this->captcha['674509']='w2dsci6def62a1b9c843b1e498780655e0800d.gif';
					$this->captcha['739364']='w2dsci3ab452f284e623bdbf2565b69c9c723b.gif';
					$this->captcha['638959']='w2dsci393fcb8e49f85fa8fa9f9e59e50748e6.gif';
					$this->captcha['700738']='w2dscid54601865280c1c9f04da948f2a94984.gif';
					$this->captcha['570333']='w2dsci130c6a753b94200b4b7a2771ec380804.gif';
					$this->captcha['433371']='w2dscid2f957088487d16de767b7e05b19979f.gif';
					$this->captcha['144134']='w2dscid7ce689f2e954794af5ce54e6f2797ae.gif';
					$this->captcha['354835']='w2dsciff59028edb6744a8ffa20356c8d1fda8.gif';
					$this->captcha['723374']='w2dsci899b475cf39003469da9bb731af59cfe.gif';
					$this->captcha['479138']='w2dsci47ea6d0a54e8db5c968f7a6066e8ff5a.gif';
					$this->captcha['001072']='w2dsci0cbd1d723d65e008d1bf22d5117983c5.gif';
					$this->captcha['941382']='w2dsci446001329368c3879d73132bcbade143.gif';
					$this->captcha['107081']='w2dscid821608ed82b370862123106b407137d.gif';
					$this->captcha['639728']='w2dsciba5b925c0653db780f3af60ab47f56a1.gif';
					$this->captcha['055410']='w2dscic7a99c2ada79674aa6621d1e8da63172.gif';
					$this->captcha['493642']='w2dscieb50689a845cd8398e6c2c5fa4922618.gif';
					$this->captcha['191549']='w2dsci7c6ad13e59ff2e69614da382597b944b.gif';
					$this->captcha['964457']='w2dsci95f787753b33b19feac459cbe48d64d2.gif';
					$this->captcha['224572']='w2dsci5e9b0b8e58a1528a74b821b7d9398fff.gif';
					$this->captcha['917072']='w2dscic8ce0ab75ff47a8eee0ea80633014c78.gif';
					$this->captcha['705109']='w2dscife85f67b9522d120309e0a88b1790c96.gif';
					$this->captcha['928667']='w2dsciece7322bae6372a67308fa23f1dec29a.gif';
					$this->captcha['557873']='w2dsci0631e11516475f7fc4b997bef1db3b7f.gif';
					$this->captcha['339481']='w2dsci07a0d5cd62dd2045e1e28969e129916c.gif';
					$this->captcha['007259']='w2dscide622641945e624aa5856537d420f714.gif';
					$this->captcha['570870']='w2dsci57171f33ef20efc519b7fde027f31caf.gif';
					$this->captcha['011245']='w2dscia1477163e87e65b1a5b69094dede20d8.gif';
					$this->captcha['312076']='w2dscicd50445b4a131b7dc964a70906f2196d.gif';
					$this->captcha['838294']='w2dsci79c9061f9c149ab942668739a9c85bf5.gif';
					$this->captcha['521073']='w2dsci2dcb6791b590325f3d750cdc5cb7e505.gif';
					$this->captcha['214693']='w2dsci79c54841db9ce7dbc21591a75b876dda.gif';
					$this->captcha['096025']='w2dsci1a8a393d320dd33ee47fd62646fc21a6.gif';
					$this->captcha['712373']='w2dscieb9d3c78ddf13ef76b86a7685c80baa0.gif';
					$this->captcha['287879']='w2dscic90f3d48b023f90a6acd0641630fe3d9.gif';
					$this->captcha['140203']='w2dsciacac2540047666923b449ba90ef283f2.gif';
					$this->captcha['961533']='w2dsci0291371de35baf465403119697782c39.gif';
					$this->captcha['668012']='w2dsci4b2bf1ca35c1add689d118b404a01325.gif';
					$this->captcha['694166']='w2dscib0c71cc8fa539e7a800fe3bdc955d84d.gif';
					$this->captcha['683891']='w2dsci805119d0df2ca6fdd7ed7482a02038c1.gif';
					$this->captcha['731476']='w2dsci6bb63b2cf4bdffb97f4997981c278e55.gif';
					$this->captcha['643928']='w2dscib8efe1297206cb8076ad9830e37061c7.gif';
					$this->captcha['855779']='w2dsci9e794f7381334100611d6291fdf7687a.gif';
					$this->captcha['098751']='w2dsci74e4d4e4d7ac461cdac75e03819bf1d3.gif';
					$this->captcha['318022']='w2dsci0b36c05e119882b299cb6c9d62fe65b2.gif';
					$this->captcha['204760']='w2dsci04949aca04f91efac378cf91625bd24b.gif';
					$this->captcha['458447']='w2dsci4fe0a31d1355e1bef5b4f4e9a20506d7.gif';
					$this->captcha['324964']='w2dscie5395b1a502ba5efa8b921bcaf201275.gif';
					$this->captcha['484235']='w2dscifca96b3354c0e9f1bf709e5ee8a9391c.gif';
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
