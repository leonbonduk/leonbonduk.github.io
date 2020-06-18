<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<title>Reversion to the mean</title>
       		<meta name="description" content="Introduction to charting technical analysis and price prediction" />
       		<meta name="keywords" content=", technical-analysis, banking, trading" />
       		<meta name="author" content="James Day" />
		<meta name="robots" content="all">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link href="https://www.evolving.money/css/styles.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://www.evolving.money/css/960-12-col.css" />
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157104566-1"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-157104566-1');
		</script>
</head>


<body>

	<?php include("../includes/test-header.html");?>

<div>
	<div class="row">
		<div class="col_8 first" style="background-color:#fff">
<h1 class="h1_article">Reversion to the mean</h1>

		</div>

		<div class="col_4 last" style="background-color:#fff">
			<div class="imgbox"><img class="center-fit" src="https://www.evolving.money/Images/EM_circ_logo.jpg" alt="Evolving Money totle in a circle of finacial logos"></div>
		<p> <strong> Charting a way through price prediction...reversion to the mean.</strong></p>
<p> <u> "Volume 1: Rules based trading models" </u> </p>	

<p>  Technical analysis and charting techniques are used by traders to help them place better trades with a higher probability of success. Models are back tested on past price data, and strategies that worked well on the past data are used on the live price data to help decide when to buy and when to sell. </p>

<p> Many of us may be aware of the terms algorithmic trading, and high frequency trading. This is an example of automated trading, however the trading does not have to take place on such a short timescale, in fact trading over longer term time scales can also be automated. The advantage of automating trading decisions is that it helps take the emotion out of trading, and to standardise the decision making.  </p>

<p> The arsenal of computational techniques available for assisting trading decisions is growing, and so is the data available. <strong> Good modelling starts with good questions and clear objectives </strong>. Here the objective is to make good returns trading Ethereum on a trade time scale of weeks to months. We will look at a simple trading model that seeks to do that, and use it to demonstrate key concepts in technical analysis and charting. </p>

<p> The model uses moving averages to help assess if the market is rising or falling. It also employs the concept of reversion to the mean to decide when to place trades. So what is meant by mean reversion? We can use the graph below to help explain it.</p>

	<div class="imgbox">
    		<img class="center-fit" src="../Ethereum-winter-bull-standard-extract-SMA.png">
	</div>

<p> If we look at the price data for Ethereum for late 2017 early 2018 we can see several things. Firstly the price is very volatile, there were good opportunities to make both large gains on a trade, and also large losses The mean is the average price, moving averages on two different timescales (50 day and 100 day) are plotted. Looking at the 100 day simple moving average (SMA) you can see that the price trend is generally rising. However the price keeps falling back to near the 50 day SMA (mean reversion) and eventually to the 100 day SMA. Mean reversion is the idea  that the price doesn't stay above its average price. </p>

<p> It sounds simple, you need to buy low and sell high, but it's actually not that simple. The first question you have to answer is, <strong> "is the price right now comparatively low or comparatively high? </strong>". The second question you have to answer is, <strong> "where is the price more likely to go from here up or down?" </strong>. The charting techniques and concepts like mean reversion help to answer those questions, and pick times to trade where <strong> both questions </strong> are easier to answer.  </p>

	<div class="imgbox">
    		<img class="center-fit" src="../ethereum-full-standard-SMA-50-100.png">
	</div>

<p> Looking at the price over a much longer timescale (2016 to March 2020), you can see there are both rising and falling means (bear markets and bull markets). Devising rules based on the concept of reverting to the mean over this longer timescale is a bit more challenging. By looking at the graphs some example rules that might give good trades have been made, and using a model we can test them and seek to improve on them.  </p>

<table style = "width:100%">
<tr>

<th> Rule 1 </th>
<th> Buy only if price < 100 day SMA and remained below for > 5 days </th>
<th> Identifies a probable market low </th>
</tr>

<tr>
<th> Rule 2 </th>
<th> Buy if rule 1 satisfied, buy when price above 100 day SMA and stays above for more than 10 days, but not if the gradient 100 day SMA is less than - 0.5 $/day</th>
<th> Identifies a probable rising market </th>
</tr>

<tr>
<th> Rule 3 </th>
<th> Sell if the close price fall below the 50 day SMA  </th>
<th> Identifies a market peak has passed </th>
</tr>

</table>

<style>
table, th, td {
 border: 1px solid black;
}
</style>

<p> The rules produce a reasonably successful trading model, a model that is able to take a starting balance of $5000 in 2016 and trade it up to  $77915 by March 2020.  </p>

<table style = "width:100%">

<tr>
<th> Date </th>
<th> Trading action </th>
<th> Ethereum close price </th>
<th> Balance Ethereum</th>
<th> Balance USD </th>
</tr>

<tr>
<th> 27-05-2016 </th>
<th> None </th>
<th> 11.25 </th>
<th> 0 </th>
<th> 5000 </th>
</tr>

<tr>
<th> 25-09-2016 </th>
<th> Buy </th>
<th> 13.07</th>
<th> 381.79 </th>
<th> 0 </th>
</tr>

<tr>
<th> 10-10-2016 </th>
<th> Sell </th>
<th> 11.78 </th>
<th> 0 </th>
<th> 4487.49 </th>
</tr>

<tr>
<th> 26-01-2017 </th>
<th> Buy </th>
<th> 10.66 </th>
<th> 420.03 </th>
<th> 0 </th>
</tr>


<tr>
<th> 15-07-2017 </th>
<th> Sell </th>
<th> 167.72 </th>
<th> 0 </th>
<th> 70436.97 </th>
</tr>

<tr>
<th> 02-10-2017 </th>
<th> Buy </th>
<th> 296.72 </th>
<th> 237.35 </th>
<th> 0 </th>
</tr>

<tr>
<th> 01-11-2017 </th>
<th> Sell </th>
<th> 290.82 </th>
<th> 0 </th>
<th> 69016.60 </th>
</tr>

<tr>
<th> 26-02-2019 </th>
<th> Buy </th>
<th> 135.76 </th>
<th> 508.3 </th>
<th> 0 </th>
</tr>


<tr>
<th> 14-07-2019 </th>
<th> Sell </th>
<th> 225.76 </th>
<th> 0 </th>
<th> 114743.45 </th>
</tr>

<tr>
<th> 26-02-2019 </th>
<th> Buy </th>
<th> 162.40 </th>
<th> 706.50 </th>
<th> 0 </th>
</tr>


<tr>
<th> 12-03-2020 </th>
<th> Sell </th>
<th> 110.30 </th>
<th> 0 </th>
<th> 77915.49 </th>
</tr>



</table>

<style>
table, th, td {
 border: 1px solid black;
}
</style>

<p> Not every trade the model makes is profit making, but the <strong> overall gains are pretty good ~1460% growth </strong>. The trading model could be improved by getting it to sell closer to the price peaks. The current model sells after peak based on the 50 day SMA, the question that arises is as follows <strong>"is there a better way of identifying and selling closer to a market peak?"</strong>.</p>

<p> <strong> An improved model using Momentum (MTM) and Rate of Change (ROC) was developed </strong>, in order to improve the timing of sell orders, so that sell orders are place closer to the price peaks. The trades from this model are shown below:  </p>


<table style = "width:100%">

<tr>
<th> Date </th>
<th> Trading action </th>
<th> Ethereum close price </th>
<th> Balance Ethereum</th>
<th> Balance USD </th>
</tr>

<tr>
<th> 27-05-2016 </th>
<th> None </th>
<th> 11.25 </th>
<th> 0 </th>
<th> 5000 </th>
</tr>

<tr>
<th> 25-09-2016 </th>
<th> Buy </th>
<th> 13.07 </th>
<th> 381.79 </th>
<th> 0 </th>
</tr>

<tr>
<th> 12-03-2017 </th>
<th> Sell </th>
<th> 23.39 </th>
<th> 0 </th>
<th> 8920.08 </th>
</tr>

<tr>
<th> 26-07-2017 </th>
<th> Buy </th>
<th> 203.23 </th>
<th> 43.84 </th>
<th> 0 </th>
</tr>

<tr>
<th> 12-01-2018 </th>
<th> Sell </th>
<th> 1260.00 </th>
<th> 0 </th>
<th> 55231.33 </th>
</tr>


<tr>
<th> 26-02-2019 </th>
<th> Buy </th>
<th> 135.76 </th>
<th> 406.76 </th>
<th> 0 </th>
</tr>

<tr>
<th> 28-02-2020 </th>
<th> Sell </th>
<th> 227.37 </th>
<th> 0 </th>
<th> 92474.35 </th>
</tr>




</table>

<style>
table, th, td {
 border: 1px solid black;
}
</style>

<p> <strong> With the improved model fewer trades are placed </strong>, an artefact of sell orders being placed at different dates, and the buy rules not being met as often. <strong> The model places sell orders much closer to the market peaks </strong> and in spite of fewer trades overall returns are significantly higher. A starting balance of $5000 in 2016 is traded up to $92474 buy March 2020.<strong> This represents gains of ~1749% </strong>.  </p>

<p> Both of the models trade on a low frequency time scale (weeks to months). The type of model demonstrated here would be called  a "rules based expert system" in AI terminology. It is a basic model (rules based expert systems date back to the 1970s), and requires "an expert" to develop the rules, and the rules have to be manually programmed. More modern and sophisticated AI techniques such as Machine Learning (ML) can be used to develop the rules on their own, and code it themselves. </p>

<p>This is a start of the journey, in the next volume we will look at how to improve and optimise these rules based models using a Genetic Algorithm, and add trading on shorter time scales to increase gains in the rising markets. We hope you join us for the next segment (TA volume 2). In later segments we will also look at ML techniques such as SVMs and other AI techniques like clustering to enrich the modelling arsenal.  </p>

<p> If you want to take a deeper look at how the trading models presented here in volume 1 were developed, and for deeper look at the numbers, please have a look at our  deep dive paper. It provides some valuable additional insights! </p>

<p> "Evolving Money charting a way through price prediction: Rules Based Trading Models - TA volume 1 " Link to deep dive  </p>


<p> -----------------------------------------------------------------------------</p>

<p> DISCLAIMER: Technical analysis techniques seek to improve the probability of making good trades in the future based on using past data, and making the assumption that in the future behaviours from the past will be repeated. There are no guarantees, as the future is unwritten. Different circumstances can come into effect that mean past behaviours are not repeated; behaviour also changes over time. The ideas presented in this blog should not be construed as investment advice. </p>
               
	</div>  
</body> 
	
</html> 


		
			<div class="vertical_ad">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Native_vertical_banner -->
				<ins class="adsbygoogle"
     				style="display:block"
     				data-ad-client="ca-pub-3169172932709847"
     				data-ad-slot="1100347920"
     				data-ad-format="auto"
     				data-full-width-responsive="true"></ins>
				<script>
     				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>

	</div>

	<div class="clear"></div>

</div>

<?php include("../includes/footer.html");?>

</body>
</html>
