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
					$this->captcha['397270']='w2dsciae38b59d7f218810c6472e061e6c18a9.gif';
					$this->captcha['926015']='w2dsci585e86ac13c16262fdadfbb06c1cdd81.gif';
					$this->captcha['821453']='w2dsci66b71eb0eafc1e23763ab616d3c9a642.gif';
					$this->captcha['860976']='w2dsci251e6e59251c435c9f38c23e04f10501.gif';
					$this->captcha['400180']='w2dsci4ee4f0db1b4034d849093efc89f2bbd2.gif';
					$this->captcha['285030']='w2dsci9d79b3adf0db95bdd21c8d9f6523018f.gif';
					$this->captcha['064879']='w2dsci53a8245f7f17693df6a621a52cfe7aad.gif';
					$this->captcha['318693']='w2dscic22dd4301a93678049d2a5216b23b0ba.gif';
					$this->captcha['021269']='w2dscid156b13211819c4bd7cd73ba17ab4d89.gif';
					$this->captcha['914691']='w2dscia9f784d9662e2006d69a0d7eb046ffb1.gif';
					$this->captcha['432465']='w2dsci35b24c14c2735b25d10e75eebd8d51a1.gif';
					$this->captcha['489133']='w2dscidfae2fb8053930d486d4eb038c0c8c68.gif';
					$this->captcha['208596']='w2dsci238e85c8278adb98beed4c4e4a795cc1.gif';
					$this->captcha['531366']='w2dsci6c8e92db1f0dc5c311120d7c98e37695.gif';
					$this->captcha['954853']='w2dsci9bc93ee004b95f93a18f5a2c541f0f3c.gif';
					$this->captcha['109966']='w2dsci44880cbf9cda1dcff537443db617fb5a.gif';
					$this->captcha['992801']='w2dsci1969b10e1ec2d2245ee190b7d65e5f03.gif';
					$this->captcha['250902']='w2dscib1bb07dd951851e78ad9e9349c84f40d.gif';
					$this->captcha['580100']='w2dsci0262f2c3aeda6e7195d2d17909d79958.gif';
					$this->captcha['215616']='w2dsci6ae5e9ee940718e8a4756633caef3fdc.gif';
					$this->captcha['557417']='w2dsci9ef41feafee074dba49bed25b58c7734.gif';
					$this->captcha['339409']='w2dscida14da0fcf5a09619b87c476cad5bed8.gif';
					$this->captcha['406534']='w2dsci205543bc0706bfc069aa0c201fef87d6.gif';
					$this->captcha['652032']='w2dsci3310f3d2e418e4afa1226fb35d6cfd81.gif';
					$this->captcha['620584']='w2dsci56e05fc78b1a34e6bf73f299c3eb7b8d.gif';
					$this->captcha['779983']='w2dsci90c5605d6a3c162877da6f55243fbe01.gif';
					$this->captcha['847364']='w2dsci4c56f701da1b288b21a6b70e9825a069.gif';
					$this->captcha['191307']='w2dsci5cb38c717ed6d013754b1e1fe1ac29a3.gif';
					$this->captcha['786610']='w2dscia596059ce574adf887f62ca67d8a138d.gif';
					$this->captcha['491201']='w2dsci11726c5d552bdcfc4b9f7cbcf86ae95c.gif';
					$this->captcha['296509']='w2dscie5cfdd6ab9c6b794bdb9304179112895.gif';
					$this->captcha['885383']='w2dsci2af222586205f22c7ba120ef92ab3c95.gif';
					$this->captcha['613419']='w2dscida69b44a3c6a4bf1dd35bbdb43b815f6.gif';
					$this->captcha['747357']='w2dsci43ec47b60f25c32d2d0f7008ecf60986.gif';
					$this->captcha['458377']='w2dscid11c177a03594c4f19c9502f2463f732.gif';
					$this->captcha['261542']='w2dsci143427b9ca44f8bc736e94818a6e290c.gif';
					$this->captcha['037104']='w2dsci0c86edd615a5cfbaa7145dd4824d4652.gif';
					$this->captcha['106373']='w2dsci92589dcb906cfed145d6819cd0a3a773.gif';
					$this->captcha['165183']='w2dscif95826a01c1ac7f7a8b496a1b5b8151b.gif';
					$this->captcha['234578']='w2dsci3ac95f260bedad3e118c7c3505aad92b.gif';
					$this->captcha['027029']='w2dsci367f8e5b891134cdd65be27ca657706b.gif';
					$this->captcha['736034']='w2dscifb6a12527597c44965670eab7d55eeba.gif';
					$this->captcha['318597']='w2dsci0a4cea07258164baacba7c75dbe595f9.gif';
					$this->captcha['675526']='w2dsci7597385772c9806085e98b58456d2634.gif';
					$this->captcha['631348']='w2dscia0e357b34ca65e180613f08780bb3652.gif';
					$this->captcha['159838']='w2dsci5a2a5f9207ecea7d724e1d7748de7b37.gif';
					$this->captcha['398907']='w2dsci0e98d729692857bcf6d21060ac63c08c.gif';
					$this->captcha['390903']='w2dscif4f2fbd75cc19b4b0f6c634a3da53de9.gif';
					$this->captcha['436855']='w2dsci5599abd91215787de5f674fd6f053287.gif';
					$this->captcha['510537']='w2dscib860a0e52f53c4aabd1ab55c648ce202.gif';
					$this->captcha['045456']='w2dsci46682f88bb82d43deef3d9f4ef7d021a.gif';
					$this->captcha['282381']='w2dsci0667c09025d5e0aa5546e74bbad61ff9.gif';
					$this->captcha['439765']='w2dsci742e415c7a654ae12a5fefab0678dd22.gif';
					$this->captcha['427475']='w2dscic222cda0ea400eb6e88b0ae9575682c8.gif';
					$this->captcha['846804']='w2dsci3c28e9a1ee336039bf801a9e2df8c57b.gif';
					$this->captcha['740098']='w2dsci40755922adda9479f920c21960058d9e.gif';
					$this->captcha['987612']='w2dscib81164d85fdfe811b5ed3be2de32822a.gif';
					$this->captcha['404670']='w2dsci6f69a757d06b8abf68e1182983194118.gif';
					$this->captcha['098546']='w2dsci8df3e19af67eecbdf39e19a8d27fe886.gif';
					$this->captcha['794694']='w2dscia4450933dea80a92d46e9981f364dd2d.gif';
					$this->captcha['595716']='w2dscicccca141411c20275fafceaf2636919c.gif';
					$this->captcha['557966']='w2dscifc476507bc1c561872ca0e4f3f667235.gif';
					$this->captcha['178856']='w2dsci7109e1135989493c78e51791736bda6b.gif';
					$this->captcha['973449']='w2dsciea09aedd947a7085b65b39fb1f819f4d.gif';
					$this->captcha['495765']='w2dscid425eea4d14be2dd8e79cc18a6976739.gif';
					$this->captcha['491673']='w2dsci9588d03243e6d6f1fe3b8bd05fd66a9c.gif';
					$this->captcha['460353']='w2dsci8f2616ee78211cd4fda2fc5044ebb4c2.gif';
					$this->captcha['521178']='w2dscie7b770773dea79f4c5fe355db61c5784.gif';
					$this->captcha['618304']='w2dsci4c34f4d8641a007f38bab346a866c096.gif';
					$this->captcha['923931']='w2dsciad97e884ba1dad46c8b667d362bc67eb.gif';
					$this->captcha['188460']='w2dscib637da09cd91480a5ea0ac13b782ffda.gif';
					$this->captcha['515516']='w2dsci0aaf984428da30099955ca0ec8fda6fd.gif';
					$this->captcha['123549']='w2dsci288a523a7636feedde3997cdfc044535.gif';
					$this->captcha['922427']='w2dsci408aa214d832eaeef06740772de8acce.gif';
					$this->captcha['629289']='w2dscib93b6252d01670e93fb137e205a31422.gif';
					$this->captcha['612713']='w2dsci8f17d523a0fd8c885e5c3ee00fe306ee.gif';
					$this->captcha['868798']='w2dsci9d847c813114a3626cceaf48d256b6a8.gif';
					$this->captcha['191568']='w2dsciba9ec693e3c6371e0a0a365d23a8f41a.gif';
					$this->captcha['078434']='w2dscia4258cf1ccbd63a623b88c93840a3983.gif';
					$this->captcha['864711']='w2dsci850e6df1ab48bc116396aad2641b4e1e.gif';
					$this->captcha['210926']='w2dscib1d5c1c7f459dfdc46ed3caec9dc1a92.gif';
					$this->captcha['469026']='w2dscie8c694c6c8d5a1af8e27ddcbb99bdb4c.gif';
					$this->captcha['798224']='w2dscia7cf530fdfbccd32bb9749e51dfcdf64.gif';
					$this->captcha['240870']='w2dsci013231a5625c4115211cda58f0fd84fc.gif';
					$this->captcha['793059']='w2dscicc150488fda660e05169810bd59af78c.gif';
					$this->captcha['459206']='w2dsci45c76082fa40226a4c66ae07d1abc7af.gif';
					$this->captcha['968409']='w2dsci612a67e50997f49fce9d47c47456c2d4.gif';
					$this->captcha['213906']='w2dscic37103a25e15d19c089f0ce7786ac112.gif';
					$this->captcha['547510']='w2dscib3dffa3020279e1131b2b43337292baf.gif';
					$this->captcha['243529']='w2dsci27e771ff939ecdf4ccb7dee6444d86fc.gif';
					$this->captcha['310910']='w2dsci3f5a9cd03431760b183204ddc29f4e40.gif';
					$this->captcha['212777']='w2dsci34335deadbd1256cf5080e212c3416c7.gif';
					$this->captcha['829380']='w2dscif4f6a4278e742012bc9e5b9e29411e06.gif';
					$this->captcha['070593']='w2dsci14a1671b04f0e3e680fbefa10fc1e365.gif';
					$this->captcha['760055']='w2dsciac7aa99ed275ac9ddb72e7fc500ff6cf.gif';
					$this->captcha['464774']='w2dsci7f69d65d23e3769ce88e2b37d1f508d2.gif';
					$this->captcha['076965']='w2dscif27cfb3a6c80206a068e7225aaf334e0.gif';
					$this->captcha['790127']='w2dscif41dd047523e7abefad14152a897a4d4.gif';
					$this->captcha['921924']='w2dscidc09f802f295e426e09cf60ccfd28572.gif';
					$this->captcha['283011']='w2dsci8091d77930470b7b8192cac19793611b.gif';
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
