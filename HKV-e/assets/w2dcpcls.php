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
					$this->captcha['383537']='w2dsci6d52c20aed99971d8e12acdbc856f68c.gif';
					$this->captcha['302419']='w2dsci3504509feceb5fc559203e74bd2d1261.gif';
					$this->captcha['545390']='w2dsci8ad923db1db87d97ddc47feb11804e4f.gif';
					$this->captcha['825941']='w2dsci5da9796de75f5d5cb8ece3914834fc60.gif';
					$this->captcha['502292']='w2dscif6a46a5d953a14482ba4a2965fe34e47.gif';
					$this->captcha['755978']='w2dscic51e8ff75033a589dde56c4f2c7fd8b5.gif';
					$this->captcha['599730']='w2dsci8005984177bcf64b592c72dea0189baf.gif';
					$this->captcha['759000']='w2dsci709f8e7b3651014c83ec4ef29db86484.gif';
					$this->captcha['818449']='w2dscie836614a0b95c788cd016440c0c76812.gif';
					$this->captcha['522784']='w2dsci016e11f9f0d9bd4fdcb27f99eaad911b.gif';
					$this->captcha['061860']='w2dsci6333dc581810f9b571b8f25a1812d77d.gif';
					$this->captcha['182431']='w2dsci7443fc4c496eb7c7943395d5c4fec618.gif';
					$this->captcha['807351']='w2dsci3aafca59f087038be562be67480d3db2.gif';
					$this->captcha['466791']='w2dsci670bbaeaaeae605b5e937239ee64adae.gif';
					$this->captcha['259113']='w2dsci08ce212b8fcefc5726624c5992591b7d.gif';
					$this->captcha['667216']='w2dsci896e7cecd5a3d443f229eae4d67142b2.gif';
					$this->captcha['940189']='w2dsci5639e8b76de9d9c2999c7ad1cec11e41.gif';
					$this->captcha['219590']='w2dsci5cee353f78a4fc9c51766bb301e3f933.gif';
					$this->captcha['496848']='w2dsci691a3d70162e4984f405354d7cb37894.gif';
					$this->captcha['253764']='w2dsci627e89af53604a33f107296f674086b0.gif';
					$this->captcha['058944']='w2dsci11c8e495a2e074821b26f90588dbb899.gif';
					$this->captcha['673149']='w2dscie16d4f75811a5342f5a56709483a77d5.gif';
					$this->captcha['435343']='w2dsci1e36da4f362e29bb64fbd3093cc57cc2.gif';
					$this->captcha['513055']='w2dsci1b983daa7f0da902db5b329d273d9750.gif';
					$this->captcha['850443']='w2dsci8e68b4163c756edd0a0ce369b07030f3.gif';
					$this->captcha['997878']='w2dsci3883c63db458850fd9da2507e17320ec.gif';
					$this->captcha['339551']='w2dsci0ac2e6c9046796c4dc65a59f27681e3a.gif';
					$this->captcha['378563']='w2dscic32f9d21c3706972afce5ec9b4e5b789.gif';
					$this->captcha['364003']='w2dscicf4805d8791e7fefa612c04bf5d34ee2.gif';
					$this->captcha['437429']='w2dsci0ed3a3ceb1d1107e661e21ab5e4e4041.gif';
					$this->captcha['672852']='w2dsci7b8acecb90f82287989f62a03cbe8d28.gif';
					$this->captcha['651863']='w2dsci8fe9e7504f2d933d100cc32f696d8824.gif';
					$this->captcha['959121']='w2dsci85182db42e15cff9a8c94e085f008083.gif';
					$this->captcha['483197']='w2dsci4cdbb069207b2c681734feb8ed3456e1.gif';
					$this->captcha['794742']='w2dsci2b93e9648a2b64c8d3f690667830fcd8.gif';
					$this->captcha['503363']='w2dsci1847de2eeecd6df3e02620f0d13da57a.gif';
					$this->captcha['790156']='w2dscid19f1124e2feddb707def4c730a2447c.gif';
					$this->captcha['554493']='w2dsci9d03491d74dbc42d389b7a8322cb3192.gif';
					$this->captcha['887594']='w2dscib6aeb600c8704a9485bca075fa7334a9.gif';
					$this->captcha['115438']='w2dsciddf8bccd51970ffaef511457957ef466.gif';
					$this->captcha['371267']='w2dsci81a049943503935adcafd35ea14cbab6.gif';
					$this->captcha['879221']='w2dsci40ee860337517cda3c56f9e63c2eb866.gif';
					$this->captcha['581414']='w2dscic51f2daa64f07aa56540709213dc9b04.gif';
					$this->captcha['749256']='w2dsci6862df9b97b3d1dac2b22ce691bd1f34.gif';
					$this->captcha['326905']='w2dsci6450134470b99820a823485a56e58e4b.gif';
					$this->captcha['760851']='w2dsciafcbc912f1cc49e8e36df816dc34a892.gif';
					$this->captcha['914715']='w2dscic6114c25028d90db018daed92e59886a.gif';
					$this->captcha['254246']='w2dscid8bd2fd6d5acf3bd93db7aff533d367d.gif';
					$this->captcha['690334']='w2dscie29ae61a2ced47c72758a6a40ba62f64.gif';
					$this->captcha['364542']='w2dscia7339f487685f92ec3fac6aeec7b2659.gif';
					$this->captcha['246993']='w2dscid9b3726ad3fffbda3bcecb937dd9c219.gif';
					$this->captcha['105746']='w2dsci17f4fa58978b7ecb4628cb591ad54104.gif';
					$this->captcha['924933']='w2dscid80d8f8a40eaa0b77af410867b501493.gif';
					$this->captcha['049789']='w2dsci7c16e7addcb4347fbfd270c68658539d.gif';
					$this->captcha['301333']='w2dscif1a0669e9f00fc127984730922531ae2.gif';
					$this->captcha['100083']='w2dsciebeb2de0afa9f57835ee1d598f7ea59c.gif';
					$this->captcha['948122']='w2dscicf7e1e9d15b09ccbcc08abd01e57d019.gif';
					$this->captcha['849861']='w2dsci5252e7376f7a3d7bfb5f4e46e5ae3c63.gif';
					$this->captcha['609105']='w2dscieac38ee5a76848357a3ca89d5d696ac2.gif';
					$this->captcha['137467']='w2dsci774ec1f9b5fe1fbf9ac5562cc7a25686.gif';
					$this->captcha['191480']='w2dsci26147266b6b68916a9d3dc09d1d514f4.gif';
					$this->captcha['985945']='w2dsci44ded94eda1ec9dc0f62182049d5f7ff.gif';
					$this->captcha['533593']='w2dscif0b27db2c39ad4dd73af8230315f615b.gif';
					$this->captcha['200378']='w2dscibd649d6a90446be1ade1b898488400cc.gif';
					$this->captcha['996986']='w2dsci6ac0a0f0c5bcb9df3971f58aac04eb1c.gif';
					$this->captcha['031713']='w2dsci2a6fa07d0a889bb1ab14a5d3acdb6f0f.gif';
					$this->captcha['832607']='w2dsci7dbe2f93fefed3f9cd8f007f8eb43fa8.gif';
					$this->captcha['493956']='w2dsci7d33f436a9b9c61c4907a51fc53dfce8.gif';
					$this->captcha['938616']='w2dsci2c6357b457baeb6e44dc022ce5ebdcdc.gif';
					$this->captcha['043194']='w2dsci8bdcdfb0a633b67b4dd980a05832e751.gif';
					$this->captcha['329024']='w2dsci226fabfd2e861cafbc06e9948d3055ab.gif';
					$this->captcha['604139']='w2dsci3c39a13bed06424c464d2cb3d73c6daf.gif';
					$this->captcha['812696']='w2dsci14268f2d7770722f07f857904f1e9d7f.gif';
					$this->captcha['517032']='w2dsci6a0c9fc70f3c883c9a3cb0d61a88067c.gif';
					$this->captcha['498185']='w2dsci0083ee16529f7afc0aa1b492f5f3b59d.gif';
					$this->captcha['469647']='w2dsci8b2c1cdcf7aacc23a2156907982cf871.gif';
					$this->captcha['536645']='w2dsci7c4b817cdd2414c5e1acfb97db674e65.gif';
					$this->captcha['481241']='w2dscicaeae3173a31e2a0763ed7d64bfdc028.gif';
					$this->captcha['273564']='w2dscie214045e54abedf1efac7adf93b7eae9.gif';
					$this->captcha['892055']='w2dsci4f307e7e68171496d6c873a4a5127cd1.gif';
					$this->captcha['517810']='w2dscif9964b526fb9a53bfcf6b90dc74b80d0.gif';
					$this->captcha['681367']='w2dsci86c49dda1bcc48db891b1ae7f9228c80.gif';
					$this->captcha['074470']='w2dsci1d5178ae4de9b4152a658712da74f71a.gif';
					$this->captcha['422571']='w2dsci554c2e4d9ab104f1002289ee35aeb1fe.gif';
					$this->captcha['669829']='w2dsci10c48b6787efa13bc67673d5fe0c0f13.gif';
					$this->captcha['366615']='w2dsci11b582ce570f4c94da2856fe42483469.gif';
					$this->captcha['339197']='w2dscibc974442ad2f1d197dc761c3d479c8ba.gif';
					$this->captcha['206521']='w2dsci9c65d11585166cec3552271bb630ab24.gif';
					$this->captcha['543909']='w2dscib2bd7e0f5100d6b945f9aff444e49613.gif';
					$this->captcha['840453']='w2dscib104f872ca73979aa633e2a765e8cc3e.gif';
					$this->captcha['740049']='w2dsci75210e6e3b36031abfe3d605f82aa19e.gif';
					$this->captcha['072030']='w2dscie75f33f6e5c1ec80ecd09a9f3c57d832.gif';
					$this->captcha['057469']='w2dsci4eca4ba9c43bafc3342080643f8a08c3.gif';
					$this->captcha['362585']='w2dsci9ac3f8e44e762949a66dd4d378dd602e.gif';
					$this->captcha['515427']='w2dsci27ebd31fffed9875a556106a19fb84cd.gif';
					$this->captcha['052360']='w2dscia878c5c75c01a75fd253b8f1d0187602.gif';
					$this->captcha['094665']='w2dscie1bfa770851fa3f7e0d5cf5cae9331a2.gif';
					$this->captcha['176663']='w2dsci11963e14663419aa2ab4e382e6cdef3b.gif';
					$this->captcha['930286']='w2dsci757296728dad58d5be46cd4e52806d85.gif';
					$this->captcha['638907']='w2dsci020de6b3961ae6992064bfcc31a682ca.gif';
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
