<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet"/>
		<link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet"/>
		<style rel="stylesheet">
			body{
				margin: 0 auto;
			}
			
			.bg-title{
				position: relative;
				text-align: center;
				color: white;
				margin: 15px 0;
				padding-top: 15px;
				padding-bottom: 15px;
				background-color:#31B2D6;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
			}
			
			.bg-example{
				position: relative;
				text-align: center;
				margin: 15px 0;
				padding-top: 20px;
				padding-bottom: 20px;
				background-color: white;
				border: 1px solid #DDD;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
			}
			
			.footer {
				padding: 70px 0;
				margin-top: 70px;
				border-top: 1px solid #e5e5e5;
				background-color: #f5f5f5;
			}
		</style>
		<script src="http://platform.twitter.com/widgets.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<header></header>
		<div class="container">
			<div class="row">
				<div class="span1"></div>
				<div class="span10">
					<div class="bg-title">
						<h1>あなたが作るゲームのテーマはこれ！</h1>
					</div>
				</div>
				<div class="span1"></div>
			</div>
			<div class="row">
				<div class="span2" ></div>
				<div class="span8" >
					<div class="bg-example">
						<?php $output="あなたが作るゲームのテーマはこれ！:「".$chunk1[0]->noun."を".substr($chunk1[0]->verb,0,-3)."(し)て、".$chunk2[0]->noun."を".$chunk2[0]->verb."ゲーム！」"; ?>
						<?php $url="http://www.cho-design-lab.com/gamecreatorgenerator";?>
						<h3><span class="text-error"><?php echo $chunk1[0]->noun?></span>を<span class="text-error"><?php echo substr($chunk1[0]->verb,0,-3);?></span>(し)て、<span class="text-error"><?php echo $chunk2[0]->noun?></span>を<span class="text-error"><?php echo $chunk2[0]->verb?></span>ゲーム！</h3>
					</div>
					<div class="row">
						<div class="span2 offset6">
						<a href="http://twitter.com/share" class="twitter-share-button"
	   						data-url="<?php echo $url;?>"
	   						data-text="<?php echo $output;?>"
	   						data-count="none"
	   						data-size="large"
	   						data-hashtags="gcgenerator"
	   						data-lang="ja">Tweet</a>
   						</div>
   					</div>
				</div>
				<div class="span2" ></div>
			</div>
		</div>
		<script language="JavaScript"></script>
		<footer class="footer">
			<div class="container">
				<p>Copyright (C) 2012 cho design lab All Rights Reserved.</p>
			</div>
		</footer>
	</body>
</html>