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
					$this->captcha['142598']='w2dsci5b2c7fcb6f820ba5803766ae8eff3fe9.gif';
					$this->captcha['216025']='w2dscifb0fc0597c75556ae4811bb6ca2bdce6.gif';
					$this->captcha['926788']='w2dsci5a4cf34e5686f8ebcb0517a34b66050d.gif';
					$this->captcha['232032']='w2dscie9b15e2deb5973c2562b3b8f6e8207c7.gif';
					$this->captcha['749679']='w2dsci42e3209b39269416c359720d816d89c0.gif';
					$this->captcha['715833']='w2dsci90a22e7772838902ef55c88fbffb2823.gif';
					$this->captcha['121921']='w2dsciae048878b8b8384af93e2e5dac88e392.gif';
					$this->captcha['830542']='w2dsci7557f0899aaa0105862bd2d392286244.gif';
					$this->captcha['880397']='w2dsci20112e7ea631ca2649c45861f03581be.gif';
					$this->captcha['297199']='w2dsci12617fe98f6bba935f14fadf6923b5ef.gif';
					$this->captcha['188223']='w2dsci95b35ff0cfdd0b2e6ff9ea19faddea9c.gif';
					$this->captcha['510610']='w2dsci83712f097167d7081fc988ec817a731c.gif';
					$this->captcha['208517']='w2dsci9ecf17fe7c645b96637abb239dd07272.gif';
					$this->captcha['075969']='w2dsci516047415ee6fc5111a1d03e959a99df.gif';
					$this->captcha['220239']='w2dsci874976541a592cf9d596a04fd8f9bef9.gif';
					$this->captcha['388081']='w2dscidfdcbd01037c2ac98f09ddba89236d04.gif';
					$this->captcha['060272']='w2dsci8d4ce32efb48979ebe54647b7ceb92ef.gif';
					$this->captcha['052141']='w2dsci12b11aba3911bfa3eb0a9d60392d908c.gif';
					$this->captcha['007580']='w2dscia3140e641c66a8ad7581b6dc9d081e04.gif';
					$this->captcha['231266']='w2dsci48e9fb8713f62598db5e5306f0259759.gif';
					$this->captcha['667354']='w2dscic1ee3cce15f663741182ac9a1a0c7617.gif';
					$this->captcha['994027']='w2dsci68bbe017bf1a0d2fc96cb8858965427b.gif';
					$this->captcha['876479']='w2dscic709be6ba546df82a0ce84979dd553fe.gif';
					$this->captcha['061464']='w2dscid6e394395c9f857534918eabc7f8f961.gif';
					$this->captcha['798071']='w2dsci7aee377030306c81c7b16b46564a5959.gif';
					$this->captcha['365006']='w2dsci53700cfe1e30ff7a9550acd9a041c535.gif';
					$this->captcha['500704']='w2dsci4f082e470121f72693f79d3da55f405c.gif';
					$this->captcha['299455']='w2dscia3a47d2477d6821439eda3d695e1a1b8.gif';
					$this->captcha['799959']='w2dscif9f382de29ad9dd8916bee1e28ad6bd3.gif';
					$this->captcha['027930']='w2dsci568b87e9add29c829c5f9bf414826ca4.gif';
					$this->captcha['648564']='w2dsciffd521cdef234150c04304f727b5fe1c.gif';
					$this->captcha['503159']='w2dscidfd317a79d48b74dee109a7ae56ab761.gif';
					$this->captcha['767559']='w2dscid72a4ee944b3de938622e0356caf79b7.gif';
					$this->captcha['446180']='w2dsci69b36408dd4c749d6e89ed6a8e244e37.gif';
					$this->captcha['320061']='w2dsciee16f7e5001c35ec2e20fda56246d811.gif';
					$this->captcha['578033']='w2dscie9b8877c7a2fe3bfda7d5b59448127b4.gif';
					$this->captcha['258796']='w2dsci393c5bfa86019afbaf9a5319339ce775.gif';
					$this->captcha['061834']='w2dsciae2182bab846d07a411c302fa3ffcfc5.gif';
					$this->captcha['188961']='w2dsci23967f4929988c36df6febc3db1c61d7.gif';
					$this->captcha['176542']='w2dsci88335507276fedebfcc6ffa0fa20131b.gif';
					$this->captcha['947436']='w2dsci59f6bc6498e17c73e8bc0e2a6f376df4.gif';
					$this->captcha['372997']='w2dsci1b4d2bfa3ca748d104194bf0e6a8358f.gif';
					$this->captcha['427137']='w2dsci0d79c43a517ab5a1d444d6f89742d7a9.gif';
					$this->captcha['470564']='w2dscifaf2f0c355cabdb8dc42beb184564be0.gif';
					$this->captcha['447432']='w2dsci54ab9f8b3a0a4682a169dc8f50dfcaf7.gif';
					$this->captcha['593845']='w2dsci2dd37f806594e7995ebb733ed18d9a85.gif';
					$this->captcha['459153']='w2dsci524da27a88c5c51387c6147082da98ae.gif';
					$this->captcha['790112']='w2dsciaed3f2ca341685a0bf682543072b2f5d.gif';
					$this->captcha['415032']='w2dsci58a6361c5c0676a01434169a8bf9ec37.gif';
					$this->captcha['454172']='w2dscid50fd8bd3aa0f5dbcbb3c4f1a01cdc55.gif';
					$this->captcha['804416']='w2dsci2c24b599922ec97dec0523ee8324959e.gif';
					$this->captcha['307064']='w2dscif3ceb5864b658f04a47c66244e66386d.gif';
					$this->captcha['348347']='w2dscia87ae72e725d563c5a8887b2d7268846.gif';
					$this->captcha['511903']='w2dscic0deefc3b6742c40310b475c586d7b66.gif';
					$this->captcha['115394']='w2dsci09bd73e2dc73c8686def7f8556a0b73c.gif';
					$this->captcha['905573']='w2dsci9ea4a231b29d61ca72b9d4bbda66ee7b.gif';
					$this->captcha['594909']='w2dsciac490f4b51ca81ebe1b7cfd3b0fef8d8.gif';
					$this->captcha['093269']='w2dsci4e1c90ddaec3b1241469930c0b9bd074.gif';
					$this->captcha['623773']='w2dsci801648c8e5767c732e521336be0a84ce.gif';
					$this->captcha['027719']='w2dsci664d5953242407f0ae8fd0551ca72e97.gif';
					$this->captcha['923029']='w2dsciddc1e3166228bd28ae3bfa2724a2269c.gif';
					$this->captcha['429961']='w2dsci51e00cb39180e62adc93cee467a96361.gif';
					$this->captcha['771634']='w2dsci4a3b9be26cd5da021e39cb6ea3eaca66.gif';
					$this->captcha['905190']='w2dsci58e6d5b29b2a366c747ff23cb2ca6e24.gif';
					$this->captcha['774785']='w2dsci03b70e77e73b14926c2d30f3d5caa7a2.gif';
					$this->captcha['848211']='w2dsci66ec5c72f6ced2ccd6d867c1cba3624b.gif';
					$this->captcha['443130']='w2dscicb8494f76f11cdb8bd020db68b88b1fe.gif';
					$this->captcha['095909']='w2dscid35f86b332a111aede5a7a0d18ada66b.gif';
					$this->captcha['055634']='w2dsci236c57021321f25058bb70a09938be5c.gif';
					$this->captcha['463865']='w2dsci279f2d7d87c8f03931d10e59fee0c67f.gif';
					$this->captcha['543719']='w2dscidb7b71cc2d623701881382aa6fede894.gif';
					$this->captcha['136496']='w2dsci2c5fde1642706ea1edd442437483ac4e.gif';
					$this->captcha['744273']='w2dsci22f4d2178c79b7f0833133a578b5fd5c.gif';
					$this->captcha['161075']='w2dsciedd55405c749e5f14a560434555c5604.gif';
					$this->captcha['052100']='w2dsci6620c5991df7bf0294158f82a442fb1e.gif';
					$this->captcha['374487']='w2dsci716297afdfda86c99a8d6c5cf19bc652.gif';
					$this->captcha['514471']='w2dsci1b8632b3c2a22c3ddf50aa7d74845019.gif';
					$this->captcha['497768']='w2dsci1303c04854c2fa985bb5c730ef9b2d7f.gif';
					$this->captcha['084116']='w2dscib4ff55031e35662946e759fbf350a176.gif';
					$this->captcha['251958']='w2dsci2933f9684d1969546c261561570c9ff5.gif';
					$this->captcha['482072']='w2dscif9344b769844378bd4ac7427f3285f37.gif';
					$this->captcha['916018']='w2dsci0a5e8b3341326e0ba468893664f713ad.gif';
					$this->captcha['871456']='w2dsci0a62987e4e0182e8be676420bf8fa79f.gif';
					$this->captcha['095142']='w2dscieb80d2193c40b60ac696035d18eff9ad.gif';
					$this->captcha['531230']='w2dsci413fc16eda2b46d3f7d77454de200322.gif';
					$this->captcha['857903']='w2dsci62df4598cb03204f7e7a7b66679bfef9.gif';
					$this->captcha['470153']='w2dsci34a90685874a6fd28f27a7bb4ce14657.gif';
					$this->captcha['423449']='w2dscib142e21bcda1258373625bd34abc3ef8.gif';
					$this->captcha['391745']='w2dsci876a5e9574899eb98644086f8c061a9f.gif';
					$this->captcha['169067']='w2dsci4c32974f75d932f8c8b4b752a7435b9f.gif';
					$this->captcha['304766']='w2dsci401f024f68cf6fe6f08318682f5afbde.gif';
					$this->captcha['103517']='w2dsci3c1054f3091ae237b9a0a00238fe66db.gif';
					$this->captcha['604020']='w2dsciecf6acfb386b77919c4d02bc10c53d48.gif';
					$this->captcha['947837']='w2dsci25deb432e81c4c65ee653d21b5bb9722.gif';
					$this->captcha['452627']='w2dsci28197cc536ab4e163686d0b82c617fe3.gif';
					$this->captcha['865143']='w2dscieded39b0f480f33acf56458c2a48c55e.gif';
					$this->captcha['571622']='w2dsci72322475131127bfcd0699e1a6b61118.gif';
					$this->captcha['808165']='w2dscied1ef165b2be87ad142f85c25e276490.gif';
					$this->captcha['239968']='w2dsci585504aca77f38a4fbfa4e12a6f5de25.gif';
					$this->captcha['382094']='w2dsciadf51710dccc696d57815d8fca9f172f.gif';
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
