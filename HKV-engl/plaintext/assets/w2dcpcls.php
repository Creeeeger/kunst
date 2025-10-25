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
					$this->captcha['184712']='w2dscic87e3923a96a77f99b09d51f46768ca9.gif';
					$this->captcha['700216']='w2dsci27a41632f998672cb811657b7ca2fc5f.gif';
					$this->captcha['853058']='w2dsci06656f92b482b3412ce434c350fe35aa.gif';
					$this->captcha['274147']='w2dscie49eb01af69786b1b3bf01c752bc8dea.gif';
					$this->captcha['233872']='w2dsci0261af919b532fef2949079ca96e2582.gif';
					$this->captcha['200024']='w2dsci0b9c2c9004c1df8898ac514eb4da1f24.gif';
					$this->captcha['164035']='w2dsci3d51aff469df84481671e608a9d65bd4.gif';
					$this->captcha['314734']='w2dscic77cafa0d10ac36cd58b221a4a3ff7c6.gif';
					$this->captcha['922511']='w2dsci679e52607272018f2eb360685984a319.gif';
					$this->captcha['897236']='w2dscidf50c32278f15e0c9e4b504998bd459d.gif';
					$this->captcha['230338']='w2dsci8f93905f650ca9f186b54e0b074c2194.gif';
					$this->captcha['552725']='w2dsci5ac17d124cfd4c6cf051fc0c547b8bf5.gif';
					$this->captcha['692709']='w2dsci33f59acac8f8dc2d59df6a355fa6e3b1.gif';
					$this->captcha['118083']='w2dsci3aa086fb314b0cbd37fd2f73bc369496.gif';
					$this->captcha['820276']='w2dsci4545f9df5a27991b6d753dd5eb173ddb.gif';
					$this->captcha['430196']='w2dscia422ff4d7d0c13c78062724c1a7bb0e1.gif';
					$this->captcha['660309']='w2dscibcb3e44271f0b29d96aa09f144c05af3.gif';
					$this->captcha['536333']='w2dsci5bacaf3d09fac4723f49ab8259c17982.gif';
					$this->captcha['491772']='w2dsci2ca01bc2970e14964f986541c769823e.gif';
					$this->captcha['715457']='w2dscid504cb9863ea5f8f4e56e257d017d49a.gif';
					$this->captcha['151546']='w2dsciaa6baa9cd8bc49fb12879e759e413320.gif';
					$this->captcha['478219']='w2dscic6f9185ca365c70830a9ed45d450f989.gif';
					$this->captcha['244827']='w2dsci752185529d7eafdc87dbe675f95d7356.gif';
					$this->captcha['429812']='w2dsci3ae667b3a8feeec1f541bbb8d1d9c23e.gif';
					$this->captcha['840186']='w2dscicca63da59021bfe92a4e05fdaf39e6cb.gif';
					$this->captcha['617508']='w2dsci175301c5d9bdd4868cf86f96c785fee0.gif';
					$this->captcha['869051']='w2dscifb9514fff74d6800e67d630349d0e06e.gif';
					$this->captcha['551957']='w2dsci1f9cf6dd5f9b4c66bf0185d439265607.gif';
					$this->captcha['340181']='w2dsci543f2f5f195534be91424431ed0e8155.gif';
					$this->captcha['568152']='w2dsci7411c68ffc3377b7a1719c8952e4094a.gif';
					$this->captcha['072942']='w2dscie8e9831e2db0efffb031f2881f8e0797.gif';
					$this->captcha['601303']='w2dsci6e66d3b88099cc41ccd31dc9eafe7681.gif';
					$this->captcha['191937']='w2dsci9b99eb7ea0a0d50f9397a31eb65841f3.gif';
					$this->captcha['986403']='w2dsci971bf6de2dbac27e291b18e2fc444240.gif';
					$this->captcha['860283']='w2dsci1b399530930ddea13643e7ab6ebf34bc.gif';
					$this->captcha['002410']='w2dsci420b4f3b799413b9e162e0a0225a4a19.gif';
					$this->captcha['799019']='w2dscia320f28279a46d2567330c420ff80716.gif';
					$this->captcha['486211']='w2dscic15fb9e5c49bc4bf7ab851da88572d62.gif';
					$this->captcha['613338']='w2dscib6dbbeaf4d7b2951248be74fe36aef0e.gif';
					$this->captcha['600921']='w2dsci6c4aa2a189d5b213dc522781b42de808.gif';
					$this->captcha['371814']='w2dscidbb50da157b2f50d6ac34b34e3e02fee.gif';
					$this->captcha['183422']='w2dsci540badf77e6ae0afdb1837c3d9022828.gif';
					$this->captcha['237563']='w2dsci7dd7a9603285e305e9adcf965df74c2f.gif';
					$this->captcha['280988']='w2dsci57722d3a9113a5f61d269e6cb4c3c29e.gif';
					$this->captcha['815778']='w2dsci1cf840b4b6d0865ff7e5b1cf184304ca.gif';
					$this->captcha['404269']='w2dsci96061f003b6e93559afa634039012c00.gif';
					$this->captcha['269579']='w2dsci46401b10cd8a0e05e4111723804b5b5e.gif';
					$this->captcha['158459']='w2dsci179606f6da224f8646b288ace3e28a2a.gif';
					$this->captcha['667534']='w2dsci445d80024fe1d7ebf48897853d83ba53.gif';
					$this->captcha['822519']='w2dsci6c56c9a10115ac6f42e95ae5fea6c3fa.gif';
					$this->captcha['056919']='w2dsci910fb47719a7758802e92fb0900dbda5.gif';
					$this->captcha['559566']='w2dscicad93cf8ec6a9db7cfc080611113b59f.gif';
					$this->captcha['716693']='w2dsci8f1c9e4bb24e9e8582c69dd0673543fc.gif';
					$this->captcha['764405']='w2dsci8c231a378f4e6ee768f92bde288ff653.gif';
					$this->captcha['367896']='w2dscif28852372730c2b10114538b6eeca17e.gif';
					$this->captcha['158075']='w2dsci386d92cdbe23610f51a9c344e641cc9c.gif';
					$this->captcha['847411']='w2dsci9c2cc7e606d8f3a7f64536edd719e512.gif';
					$this->captcha['461617']='w2dsci8986809939cd0fbaa397e1e32be1b1c5.gif';
					$this->captcha['434199']='w2dscie07d0904275837ab2634775c06e9bd5e.gif';
					$this->captcha['280222']='w2dsci2917fe20bfd5aa5da00071e65fe35a46.gif';
					$this->captcha['733454']='w2dscic8359657c204a947b687632ad86f0d1a.gif';
					$this->captcha['240386']='w2dsci4262ccfe70805e03549fab6b62d12b8c.gif';
					$this->captcha['582059']='w2dsci1b79136b51eb87d96ca81a1438d5800a.gif';
					$this->captcha['715615']='w2dsci8fee97a35f74a0f2f8905a92ed5044a6.gif';
					$this->captcha['585210']='w2dsci2a6c1a7104bae852079518fa175ebebe.gif';
					$this->captcha['658636']='w2dsci4f3be03ff48e342a5e0d12ac4907886e.gif';
					$this->captcha['253556']='w2dsci04a588e923a7149011ea4cd2573e5e8e.gif';
					$this->captcha['116722']='w2dsci6e510db12d5da2b4ddd7c04b6c3b4a3b.gif';
					$this->captcha['192291']='w2dscia77d12a9c6a6ae2e03405a46fec4219c.gif';
					$this->captcha['600522']='w2dsci2d7687455632acfe34df9784f516fd5b.gif';
					$this->captcha['564532']='w2dsci92213451c4db614eed9b81f0f4b412c3.gif';
					$this->captcha['273153']='w2dsci479b8d6d76b18b77075637f3b6122732.gif';
					$this->captcha['765086']='w2dsci5c98417d1ab6d799644f80d36a3f4a4e.gif';
					$this->captcha['469608']='w2dscib864c4b233116a783a63915192005df1.gif';
					$this->captcha['244788']='w2dsci33f424f35cbfb53533c232a996f7f25e.gif';
					$this->captcha['567175']='w2dsci9e3c3ff513c4f3b1ab2b1acde27e8f18.gif';
					$this->captcha['823003']='w2dscib267c5930303e6266640967aaa7306aa.gif';
					$this->captcha['690456']='w2dsci06bc761eabd2bdf17518379f6e7978f2.gif';
					$this->captcha['276804']='w2dsci04519a0b3ea9639caa0000371e4e25a7.gif';
					$this->captcha['002568']='w2dsci5393898c7009a1cc5b8a5f663fbd128c.gif';
					$this->captcha['232682']='w2dsci8bca5a8c0dbcb6c89df2f8201e6a0cb1.gif';
					$this->captcha['666628']='w2dsci835ad32684016432d5c858d67ae6b4e9.gif';
					$this->captcha['064144']='w2dscic56efdbe4fecc5eb9de912e1f1ee35da.gif';
					$this->captcha['961597']='w2dsci4533516e4552f9f567ca5d72518f9ca4.gif';
					$this->captcha['281841']='w2dscid94a57128387b2886e36cf7e53b23dcd.gif';
					$this->captcha['608514']='w2dscic2bdf04a46d5a41d5f9b5f747a30e9c5.gif';
					$this->captcha['048888']='w2dsci426efde995a8e2d3158bc937c0695fb0.gif';
					$this->captcha['002184']='w2dscie75d181fbe46f5bc9d6183e488e957f2.gif';
					$this->captcha['412558']='w2dsci2d2fa0879a705ce976961b9cd314a271.gif';
					$this->captcha['305725']='w2dscib9a68560e1f60864595b9de1b1dd3b8a.gif';
					$this->captcha['441424']='w2dsci27b263303a38c21e85e496197ed2ba86.gif';
					$this->captcha['240175']='w2dsci99ac29789d17d79498ff77fd5c5d6e47.gif';
					$this->captcha['740679']='w2dsci655839e516148a0934de792d8294f28b.gif';
					$this->captcha['968650']='w2dscib850d0b3075f3b526ca5fd53f615a5b4.gif';
					$this->captcha['589284']='w2dsciab0afb4ad54d8ebe0464f9f401f08de5.gif';
					$this->captcha['559724']='w2dsci721ff763b7c2a6ad8dadcdb53b5a9bea.gif';
					$this->captcha['708279']='w2dsci08a43e9bf9c6a89b18bd2a835ad92854.gif';
					$this->captcha['944822']='w2dsci52a604545be90d80ce317d89aebcc8a5.gif';
					$this->captcha['260781']='w2dsci24afc957691f63e417f9b5f3fcd23c2a.gif';
					$this->captcha['518753']='w2dsci2f3eaa06b3f140f44e6ffbc4dccf9cb7.gif';
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
