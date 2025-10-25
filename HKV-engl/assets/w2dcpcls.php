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
					$this->captcha['541506']='w2dsci49ee6c354eff7cfe0ff879067a18f238.gif';
					$this->captcha['117011']='w2dscie9192c3a3e81091d3d7a92688a1fa11f.gif';
					$this->captcha['295568']='w2dsci46d836562a420a4f6f32ef73da4211bd.gif';
					$this->captcha['227494']='w2dscicbf90b864249e22f56fd8f755e270256.gif';
					$this->captcha['607739']='w2dsci62a235a26404396e01989ccf2e132ab8.gif';
					$this->captcha['402205']='w2dsci4752cd89299a4211e367f15ac147de06.gif';
					$this->captcha['507774']='w2dscic12e3c651ea65f32304ae8aa7da4700c.gif';
					$this->captcha['439513']='w2dsci8b65c52f131c1708fad259961d566e83.gif';
					$this->captcha['794045']='w2dsci32e8e9ba230c40bda50ce1b33c772aec.gif';
					$this->captcha['597081']='w2dsci647f2d34e119445965d583d3ed40e2b8.gif';
					$this->captcha['513820']='w2dsciae427b6e7626e544126dcae7ff79fcaa.gif';
					$this->captcha['943480']='w2dsci9260ce016b7e416ccc67048783db73a0.gif';
					$this->captcha['388140']='w2dsci2edd083ff07f6af7ad237dceb0534e56.gif';
					$this->captcha['757672']='w2dsci097b09cff9036b16ce059b6d37c6ec3e.gif';
					$this->captcha['811812']='w2dscid38cfb81490318b15086d2c1028c7bc4.gif';
					$this->captcha['644850']='w2dsciaa6b405a29dea27e26900f01718a575b.gif';
					$this->captcha['621717']='w2dsci83809e76fa5c611f1405e040b532e234.gif';
					$this->captcha['210208']='w2dsci102d00c00d2f50a62255f52ced531add.gif';
					$this->captcha['307206']='w2dscib4e06807f07084c653f2fec769296f30.gif';
					$this->captcha['754010']='w2dsci2085b62b4d71017137dd99ea9aa29b03.gif';
					$this->captcha['821007']='w2dsci93a33ec7187307a5298dc7288b94720d.gif';
					$this->captcha['533914']='w2dscie8afd2fb53650b3da649bda8e1bae92c.gif';
					$this->captcha['326237']='w2dsci7cedd0b4acda0bcc2db6008c093ebb38.gif';
					$this->captcha['944728']='w2dsci618c680345e4f3033883795c8a6973de.gif';
					$this->captcha['217701']='w2dsci2b41c0777044e9bc0362a338da31bb3e.gif';
					$this->captcha['381257']='w2dsci60f4b8168b955af11d51368f0dcd84ae.gif';
					$this->captcha['426826']='w2dsci8db0bd92a6f526da61840151422d440f.gif';
					$this->captcha['774927']='w2dsci56c074ab5596b7360fc2f562802117ee.gif';
					$this->captcha['906341']='w2dsci518a43f693948d420a4656168332923b.gif';
					$this->captcha['078469']='w2dsci3c454d736aed73a88b845ea2f71e2417.gif';
					$this->captcha['166895']='w2dsci9485df1507af5b5bdb2b237da570c4dc.gif';
					$this->captcha['244607']='w2dsci7dd2aad1fefd760009a0437470d8b21a.gif';
					$this->captcha['311792']='w2dscic99ddeea203ba5505110b6016c29d97d.gif';
					$this->captcha['376647']='w2dscia88a8c3a11802734e92a11da3e70f401.gif';
					$this->captcha['160398']='w2dsci74382bc2d835c800857c93090ca6b987.gif';
					$this->captcha['525642']='w2dsciceab9c65eaa013d8405b5f0b16dbf00c.gif';
					$this->captcha['395238']='w2dsci83247bdbc4c5b665d0b93c0e71ab8f37.gif';
					$this->captcha['468664']='w2dscifd7a4d32016713f449177285dc484149.gif';
					$this->captcha['505661']='w2dsci00af16088b26cf48da68057ea9cd0b2d.gif';
					$this->captcha['042595']='w2dsci8020b8902e9265573f9ddbfdc60952b2.gif';
					$this->captcha['002319']='w2dsci3fb14f830c748e65a67efa5b3433729a.gif';
					$this->captcha['084318']='w2dsci261eb6dd18028bc5179717d6727ad58a.gif';
					$this->captcha['606250']='w2dsci048a7414c02246bfb0d5eb6c2dcb70d0.gif';
					$this->captcha['199026']='w2dsci48ed13a20d9c4b35e48e26821babea67.gif';
					$this->captcha['248881']='w2dsci81dcf11a26fe5920ab6924691ceed4f1.gif';
					$this->captcha['223606']='w2dscibea66ec18891be23e12a37165351cb8f.gif';
					$this->captcha['998786']='w2dsciec1397199a652c8704c269b14547cf09.gif';
					$this->captcha['552862']='w2dsciac6c5c647391afc601a8623ce9501814.gif';
					$this->captcha['808690']='w2dsci64284537bf2fddc29aa7b3df39213618.gif';
					$this->captcha['676143']='w2dsci3f7e721025814c11466fd53cbad580aa.gif';
					$this->captcha['820413']='w2dscidc332c4f428aefb8d5f4ee87e0184fb0.gif';
					$this->captcha['430333']='w2dscic901d8252cffb3d59924b623d563c7f9.gif';
					$this->captcha['776292']='w2dsci2077cb2e72f41fb316811f9c3541dfa8.gif';
					$this->captcha['094393']='w2dsciab35b1748c120356d3b84abdd4baea6e.gif';
					$this->captcha['049832']='w2dscie923a28417f57b65b7e3bc1d1f60304d.gif';
					$this->captcha['947284']='w2dscib396688744b11713bd2d3113027b3727.gif';
					$this->captcha['267529']='w2dsci3f9fb680aefd02e02cf4d42aaff8eafb.gif';
					$this->captcha['036279']='w2dsci9154bf48c24210f30a6c948cb1581d57.gif';
					$this->captcha['476654']='w2dsci1bb300d541f81e14bfa0d6f57ba38b7a.gif';
					$this->captcha['987871']='w2dscic40918fc0e5a3f62ff127611d1383438.gif';
					$this->captcha['514091']='w2dsci0c7d7322f8f6936a7df7f9e75280a10d.gif';
					$this->captcha['291413']='w2dsci9d1af2eb3281a5fceef94b28b4a6d894.gif';
					$this->captcha['100878']='w2dsci6a56b57e5142d85fef878fb3a72b585a.gif';
					$this->captcha['783784']='w2dsci1470a0e03f1ec13ade0cf4d5c3b0599a.gif';
					$this->captcha['284288']='w2dscie6cdf52f49037a669443309801951757.gif';
					$this->captcha['628105']='w2dscif30e39fa33423a880dc5cb012ee6753e.gif';
					$this->captcha['132894']='w2dscic35095f12b49c9b23406ef01a26be86e.gif';
					$this->captcha['661255']='w2dsci1bac0cc3a29c484dddf733ad75eff963.gif';
					$this->captcha['251889']='w2dsci8e1a06fc7605a4dcf6eba0679faf8a9c.gif';
					$this->captcha['930509']='w2dscic467a6a638449a4be048c27f5cfec60b.gif';
					$this->captcha['920234']='w2dscid5487dccaf664d99b523131918b41a1e.gif';
					$this->captcha['620284']='w2dsci92af3297ad510672075bd2cf901666e1.gif';
					$this->captcha['858970']='w2dsci85f856d352daae0b4d1ef8e1ff9bbbc4.gif';
					$this->captcha['988241']='w2dsci82d48d9077f5b0295d7b19062f7478dd.gif';
					$this->captcha['961009']='w2dsci7cb24444b4c1efd960a1347525843ab1.gif';
					$this->captcha['832747']='w2dscic3c098af057e96bd607de686d263a978.gif';
					$this->captcha['719485']='w2dsci17c39811a4b2cf7b21c2212c6ffcf9a8.gif';
					$this->captcha['857326']='w2dsci5ab2ba8aa64390607ae1cc92e64f9394.gif';
					$this->captcha['027312']='w2dscifaa5ddc5aebad9db8b0b89f44411ceaf.gif';
					$this->captcha['628660']='w2dscid6a9e5814053e7fc361bba727eef42b7.gif';
					$this->captcha['605528']='w2dsci1b555c6fbc46eb8e19494973891e5e49.gif';
					$this->captcha['751941']='w2dscicf63a2b27a46162375a1452322d298a3.gif';
					$this->captcha['733095']='w2dsci0663b3b44d18189b6fa4f790e2258c4a.gif';
					$this->captcha['506131']='w2dsci8bdd88c995aaba08ead85152d9e2affd.gif';
					$this->captcha['573128']='w2dscia81741fb34822028bbdff3773bcef962.gif';
					$this->captcha['170191']='w2dscia49d9aa0e0dbfed59563b51790c917e4.gif';
					$this->captcha['520436']='w2dsciaa5bfbfd51b2d09a8ea72524062d1a9f.gif';
					$this->captcha['023082']='w2dsci3743c2eb7c2117e0ea5966f26b033ea6.gif';
					$this->captcha['180210']='w2dsciae4f00c21b700683443b69ad5cacaece.gif';
					$this->captcha['227921']='w2dscia6f894f63dcfcad50f8a043b034b6304.gif';
					$this->captcha['389335']='w2dscib047fa49db733fb2c02fd34722e0d92e.gif';
					$this->captcha['621592']='w2dsci32851c163eb9f888a3bcb629d4f6fa50.gif';
					$this->captcha['310927']='w2dsci2784c195eeb923862990ffc39d4f4009.gif';
					$this->captcha['925133']='w2dsci01dc036d5efaaf54193cfa29e6dc0886.gif';
					$this->captcha['339793']='w2dsci7c0ccc3999b23b5da2205db52018abf6.gif';
					$this->captcha['743738']='w2dsci8a4578a0012b1fc1d95947729d7c8db5.gif';
					$this->captcha['639048']='w2dsci27c80eab3563c8470167b23dfa41ae94.gif';
					$this->captcha['588057']='w2dsci035d75f0c73082c1bf25f72e4309912f.gif';
					$this->captcha['371809']='w2dsci0a5d5cc0681739d8307b778e5d0290e5.gif';
					$this->captcha['179131']='w2dsci74f622682492f939c31fd6406f151031.gif';
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
