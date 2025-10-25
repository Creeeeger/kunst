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
					$this->captcha['922837']='w2dsci0081648c6b663a5f5fec659b2080579b.gif';
					$this->captcha['957308']='w2dsci00e61629445e62ca93c2996e72f5bcf1.gif';
					$this->captcha['449368']='w2dsci8a596bcfc4171be53d115af59364853a.gif';
					$this->captcha['230976']='w2dsci2afb9bb73ea012724668daec00353290.gif';
					$this->captcha['941357']='w2dsci8a684e00db2235a64fac5c49430d1319.gif';
					$this->captcha['457116']='w2dsci57d842359a92ff10a9b670e20f236038.gif';
					$this->captcha['781646']='w2dsci4a9626f8f11eb9282dada466cbf0212f.gif';
					$this->captcha['451312']='w2dsciec7421ea6823070125822df310bfb032.gif';
					$this->captcha['608695']='w2dscia636ce2028cad7fd67083c2d63731bfa.gif';
					$this->captcha['362091']='w2dsci6705550b450ff81ea53c41c63c9a07e1.gif';
					$this->captcha['055712']='w2dsci93c5e9fa64155d771652259c95aed7ad.gif';
					$this->captcha['275239']='w2dscia49707184284f08ba6365e47e265c165.gif';
					$this->captcha['702501']='w2dsci6a36e05f5e622d041edac7a52bdf134c.gif';
					$this->captcha['467093']='w2dsci1efb7c4f04a8172da3ded40115932bf1.gif';
					$this->captcha['971883']='w2dscif941dfbbea100d4e9e109cdaaf1238d9.gif';
					$this->captcha['774537']='w2dsci3c531588aab1f3c939a0ceb19a6623a4.gif';
					$this->captcha['438413']='w2dsci5ce12dd3b9a439252efb39f2c4aac779.gif';
					$this->captcha['507170']='w2dsci5540ebccc1cbc5a47cb328f3a6bdf7b9.gif';
					$this->captcha['381050']='w2dsci225e425ed5fe5d4538e9303bc3e81ceb.gif';
					$this->captcha['501876']='w2dsci232650d1446ac2774bc877914687052f.gif';
					$this->captcha['523460']='w2dsci43efb7be64e17cf0115bd3ffd419230d.gif';
					$this->captcha['189351']='w2dscic2cb3af9b456dc53b7b0b755795c1d6d.gif';
					$this->captcha['874400']='w2dscife4469eec48d44f4425e5a6812382896.gif';
					$this->captcha['136275']='w2dsci26db4652ef1c6ecaa5917776c9382b79.gif';
					$this->captcha['980410']='w2dsci74a8b93ddefa3e78571677f42d907ad7.gif';
					$this->captcha['508389']='w2dsci9765a896e2821c888df0ab30c90491e9.gif';
					$this->captcha['562529']='w2dscia6cf985b25e12fd46563ea75af9a66a4.gif';
					$this->captcha['142575']='w2dscif20f59c7e48d7caf78bb260e7ed3bdf7.gif';
					$this->captcha['930357']='w2dsciac14685e4896555e7d9af2f2ff59241d.gif';
					$this->captcha['613391']='w2dscid0cc328d260c62f5f7151b21a2bd98c9.gif';
					$this->captcha['152467']='w2dsci4f41672b466c52e8528fd09e86345d39.gif';
					$this->captcha['438199']='w2dsci9ed2c842a7c1e7bfc6f916f8f0d09631.gif';
					$this->captcha['925972']='w2dscib4a5ffa94c52ef3a7c17ce7d44f93fb8.gif';
					$this->captcha['523035']='w2dscid68c45990e6b1f0971d7f122839629a3.gif';
					$this->captcha['147572']='w2dsciabefb056e45fbb68076d7afc3e421e2b.gif';
					$this->captcha['723461']='w2dsci40da0d15e95e41027c4841a35df83974.gif';
					$this->captcha['154880']='w2dsci0b010b053a39d2593355c36d5ebf940f.gif';
					$this->captcha['202592']='w2dsci6526d2939d3108204d89da2761f75049.gif';
					$this->captcha['784782']='w2dscie304e106344ee7d5bb0780a54ece3a7d.gif';
					$this->captcha['943797']='w2dscib4b60369f0c921de511b9b4bb1bd1e4e.gif';
					$this->captcha['169753']='w2dscid172f91da1d65db07a90c6e55b36c62d.gif';
					$this->captcha['668113']='w2dsci620b28af810fe9d218a9d699e40312b8.gif';
					$this->captcha['230723']='w2dscib322f7dbed42f3ff976b39850a15cf20.gif';
					$this->captcha['149988']='w2dsci0b16acd8f3e079f7867ec2b2c40a4e8f.gif';
					$this->captcha['319589']='w2dsci577d31b851b7e483d2c922bed614192c.gif';
					$this->captcha['268599']='w2dscida304637e1f1912928d7579465d6c7e1.gif';
					$this->captcha['588972']='w2dsci36b8b317227a93c4bff7b1f105d31320.gif';
					$this->captcha['649285']='w2dsci5989f9138ef2211d26af7725c1cb9d8c.gif';
					$this->captcha['055500']='w2dscid5799f01fa1ccb778a44a14e05d76daf.gif';
					$this->captcha['013083']='w2dsci844772eec8804679da306d6c372db888.gif';
					$this->captcha['208527']='w2dsci1b37f6e596c66c4e292137d9f280d299.gif';
					$this->captcha['934547']='w2dsci72aea03233b0c84f619b08ffbaa944ec.gif';
					$this->captcha['870346']='w2dsci2e54209e8ea5fd99bfda20bbe13a0195.gif';
					$this->captcha['278576']='w2dsci5f4a3ffdcc48b73915ad5be264d3db01.gif';
					$this->captcha['221286']='w2dsci0dc258048a04a75f06baf89001e0caf4.gif';
					$this->captcha['414588']='w2dscifc8815c9effe3edc040a6b9044562dc0.gif';
					$this->captcha['464442']='w2dsci1dafbeb47e1118a7cc3621851cf581e8.gif';
					$this->captcha['417866']='w2dsci9d0d01e36aa20f5b84f885778f0506e4.gif';
					$this->captcha['909415']='w2dsci769b5f89928476a780974e3dc52d28d3.gif';
					$this->captcha['305044']='w2dsci1707af512255ee6203f99dd6c73743bb.gif';
					$this->captcha['560873']='w2dsciad5d99ffe364a8e0f49c6fb4b1a1a827.gif';
					$this->captcha['818461']='w2dsci2043fd5ea0d4b61009b1228e4ef9cd91.gif';
					$this->captcha['035974']='w2dscif76a4c156323b5668b78d6b0057b2bb2.gif';
					$this->captcha['892170']='w2dsci2afb6aee0e4fcdb05ea2adf83db04d5d.gif';
					$this->captcha['564362']='w2dsci7d414bdee148f8cc12836019527afb83.gif';
					$this->captcha['977007']='w2dscif20f398aa04b4022bb406861e08616a4.gif';
					$this->captcha['301281']='w2dsci9d835cdb20b4bdd0f3fc8141be075b50.gif';
					$this->captcha['061588']='w2dsci16f7d69b8b2d99df08474eb04a13dca9.gif';
					$this->captcha['381831']='w2dscic50459c0d326cbc511422bdd396a8801.gif';
					$this->captcha['656564']='w2dscifba2a3e34907c43ce2a964a7d8cb5744.gif';
					$this->captcha['496413']='w2dsci070ab3f2832d274c6299e932a1417ce6.gif';
					$this->captcha['397768']='w2dsci7cffe6f4dc14ed9c6fb61e42c6bfc611.gif';
					$this->captcha['808142']='w2dsci62aa251e1091f395edff4accaafedde8.gif';
					$this->captcha['122086']='w2dsci120eff402e635866565fb6249bbf000e.gif';
					$this->captcha['770479']='w2dsci8fde40946e958547d5c4ebe45098e99a.gif';
					$this->captcha['990007']='w2dsci9375a3741bc440f7f1f0f0b684729b9c.gif';
					$this->captcha['490511']='w2dsci2fa47dac541f00b3ce1d2c467b306a6b.gif';
					$this->captcha['108619']='w2dsci0af93e7144a06612d9b4a387d81e32b5.gif';
					$this->captcha['686651']='w2dscib5d06a58343d63dbcdf999370912d160.gif';
					$this->captcha['489304']='w2dscib9f62f033c2ecc6871a9f6aa148c6f37.gif';
					$this->captcha['079937']='w2dsci56f07a3336acdd0a55839ca5a7cdbf88.gif';
					$this->captcha['295179']='w2dscib84549ca338f1a4773c6982bb6b3634d.gif';
					$this->captcha['095818']='w2dsci644194bdb016749f8744734ae08ef546.gif';
					$this->captcha['774566']='w2dscib3df04518dcbbb441f3e61c63c4479fa.gif';
					$this->captcha['455330']='w2dsci9e259dcb906d33697fcedad4ef125cc1.gif';
					$this->captcha['290471']='w2dscic84a93094bc583a46c757b5ef81b1336.gif';
					$this->captcha['490840']='w2dsci19dd455a334974a207f272c726171fdb.gif';
					$this->captcha['752715']='w2dsci97d9144322d661ced396e22ae7a17476.gif';
					$this->captcha['523608']='w2dsci7759dc53c241e595370bf96f3832ef5f.gif';
					$this->captcha['198071']='w2dsci4fc376f549aef8e1a638ad2ab902a7bd.gif';
					$this->captcha['178969']='w2dsciab0e14025f5cf325821d9d3899a00237.gif';
					$this->captcha['759015']='w2dscib9e2e4b575763f478c1c3d424b9c616c.gif';
					$this->captcha['177961']='w2dscie8a9840f6a6b799f00456f66902623d2.gif';
					$this->captcha['156588']='w2dsciffe132426453a55cb5e7053b0fe8cfb4.gif';
					$this->captcha['095139']='w2dsci6419a9232a4f98f91b61f15adf04a161.gif';
					$this->captcha['844250']='w2dsci5e6cec9f45122c68f32b3b1603be639d.gif';
					$this->captcha['353326']='w2dsci272ef03eb65c299745958f74809f45c6.gif';
					$this->captcha['929087']='w2dsci924e4b1c77931bb8d6e181ce1cef0a84.gif';
					$this->captcha['090245']='w2dsci4f793f1ddbb47ff47cadf9cf9d3cf1c8.gif';
					$this->captcha['129512']='w2dsci3bbd5bf3904228897e3a8810ff4d8dc4.gif';
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
