
<!DOCTYPE html>

<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>CODE2040</title>

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-carousel.js"></script>
   <script src="js/scrollspy.js"></script>
   <script src="js/jquery.scrollTo-min.js"></script>
<script type='text/javascript'>
$(window).load(function(){
    $(function() {
        $('#navbar').scrollspy()
            
        $('#nav-links ul li a').bind('click', function(e) {
            e.preventDefault();
            target = this.hash;
            console.log(target);
            $.scrollTo(target, 1000, {offset:-70});
       });
       
       $('#learn-more-button').bind('click', function(e) {
            e.preventDefault();
            target = this.hash;
            console.log(target);
            $.scrollTo($('#what'), 1000, {offset:-70});
       });

       
        $('#apply-button').bind('click', function(e) {
            e.preventDefault();
            target = this.hash;
            console.log(target);
            $.scrollTo($('#apply'), 1000, {offset:-70});
       });

    });
});

</script>

<script type="text/javascript">
$(document).ready(function() {
    $('.carousel').carousel();
});
</script>


   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link href="css/landingPage2.css" rel="stylesheet">
   <link href="css/buttons.css" rel="stylesheet">
   <link rel="stylesheet" href="css/font-awesome.css">
   

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic,700italic|Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="120" data-target=".navbar">
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    
    <a class="brand" href="index.html"><img src='img/code2040-arrow.png' /><img src='img/code2040-logo.png' /></a>

      <div class="nav-collapse" id="nav-links">
        <ul class="nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#what">What</a></li>
          <li><a href="#why">Why</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#apply">Apply</a></li>
          <li><a href="#partners">Partners</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<div class="header">
    <div class="row-fluid" id="home">
    	<h2>We're bringing</h2>
    	<h1>AMAZING MINORITY<br>ENGINEERING TALENT</h1>
    	<h2>to Silicon Valley</h2>
    </div>
    <br />
    <!--
    <br /><br />
    <div class="row-fluid" style="text-align:center;">
    	<h2>Teachers, you work hard.<br />Now there's an easy and affordable way to get some extra help.</h2>
    </div>
    <br /><br />-->  
    <div class="header-buttons">  
        <div class="span3">
            <a class="ml-btn-8 ml-btn-large" id="learn-more-button" href=""><i class="icon-question-sign icon-large" style="line-height: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;LEARN MORE</a>
        </div>
        <div class="span3" style="margin: 0 auto;">
            <a class="ml-btn-12 ml-btn-large" id="apply-button" href=""><i class="icon-check icon-large" style="line-height: 24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;APPLY</a>
        </div>
    </div>
</div>

<br /><br /><br />
<div class="row" id="what">
    <div class="span3 offset1">
        <h1>WHAT</h1>
    </div>
    <div class="span10 offset1">
        <p>CODE2040 brings high performing Black and Latino/a undergraduate and graduate coders and software engineering students to Silicon Valley for a comprehensive summer fellowship program. The program consists of, among other things:</p>
        <ul>
            <li>a paid internship with a top startup</li>
            <li>mentoring</li>
            <li>a speaker series</li>
            <li>company visits</li>
            <li>interactive workshops</li>
            <li>executive coaching</li>
        </ul>
    <p>In its inaugural summer, CODE2040 fellows: 
    <ul>
        <li>met executives at tech powerhouses Google and Facebook</li>
        <li>sat down with partners at top venture firms Kleiner Perkins and Greylock</li>
        <li>were mentored by early employees at YouTube and Quora</li>
        <li>worked at leading edge startups Tumblr and Jawbone</li>
        <li>visited trendsetting companies Zynga and Square</li>
        <li>presented an original engineering project to founders from around the Valley</li>
    </ul>
    </div>
</div>
<br /><br />
<div class="row" id="why">
    <div class="span3 offset1">
        <h1>WHY</h1>
    </div>
    <div class="span10 offset1">
        <p>Census projections show that people of color will collectively be the majority in the United States in the year 2040. Yet there is no indication that the substantial economic achievement gap is closing at the same rate. CODE2040 aims to make a direct impact on the gap by increasing the number of underrepresented minorities participating in and leading the high value, innovation economy - an economy centered in Silicon Valley.</p>
    </div>
</div>

<div class="row" id="team">
    <div class="span3 offset1">
        <h1>TEAM</h1><br />
        <div id="adv-custom-caption" class="center"></div>
    </div>
    <div class="span10 offset1">

        <div id="teamCarousel" class="carousel slide" data-interval="6000">
            <div class="carousel-inner">
                <div class="item">
                    <img src="img/tristan.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Tristan Walker</h3><h4> | Founder, Chairman</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Tristan is an Entrepreneur-in-Residence at Andreessen Horowitz. Prior to his time at Andreessen Horowitz, he was the Director of Business Development for foursquare, where he oversaw strategic partnerships and monetization. In this role, Tristan managed integrations with large brands and media entities including American Express, The New York Times, CNN, MTV, Starwood Hotels & Resorts, and Starbucks. He has been named to Ebony Magazine's 100 Most Powerful People list and The Hollywood Reporter's Digital Power 50. Tristan holds a bachelor's degree in economics from Stony Brook University, where he graduated as valedictorian, and an MBA from the Stanford University Graduate School of Business. He currently lives with his wife in Palo Alto, California.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/laurawp.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Laura Weidman Powers</h3><h4> | Founding Executive Director</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Laura Weidman Powers has spent her career in non-profit management, education, the tech industry, and entrepreneurship. Directly out of college she founded the Philadelphia branch of an organization that recruits undergraduates to community service in area public schools (it is now in its 8th year). Since then Laura has founded or worked for several ventures in the nonprofit, education, and technology spaces including founding a private tutoring company that used mentoring as a means to stimulate academic success and joining consumer web start-up Border Stylo where she redesigned the product development process to be inclusive of engineers. In addition to a BA cum laude from Harvard College, Laura holds a JD and an MBA from Stanford University.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/ben.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Ben Horowitz</h3><h4> | Board Member</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Ben Horowitz is a co-founder and general partner of Andreessen Horowitz, a venture capital firm that helps entrepreneurs become successful CEOs and build important and enduring companies. Andreessen Horowitz provides seed, venture and growth-stage funding to the best new technology companies, and the firm currently has $2.7 billion under management across three funds, and has invested in Airbnb, Box, Fab.com, Facebook, Foursquare, GitHub, Jawbone, Lytro, Pinterest and Twitter. Ben was a co-founder and CEO of Opsware, which was acquired by HP in 2007 for $1.6 billion. Earlier, he was vice president and general manager of America Online’s E-commerce Platform division and ran several product divisions at Netscape Communications. Horowitz has a BA in Computer Science from Columbia University and an MS in Computer Science from UCLA. He serves on the board of many companies and pens his own blog, Ben’s Blog (www.bhorowitz.com). He lives in Silicon Valley with his wife and three daughters.</p>
                    </div>
                </div>


                <div class="item">
                    <img src="img/bea.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Bea Perez</h3><h4> | Board Member</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Beatriz Perez is Vice President and Chief Sustainability Officer of The Coca-Cola Company. Bea leads a new global Office of Sustainability responsible for creating and overseeing an integrated sustainability strategy; setting high-level goals and commitments; assessing and driving scaled investments; and managing global sustainability partnerships and programs. Bea joined Coca Cola in 1996 and has held various roles of increasing responsibility, including Associate Brand Manager, Vice President, Sports and Entertainment for Coca-Cola North America; Senior Vice President of Integrated Marketing for Coca-Cola North America, and most recently, Chief Marketing Officer for Coca-Cola North America. She is chair of the GRAMMY Foundation and sits on the boards of the Children's Healthcare of Atlanta Foundation, The Victory Junction Gang Camps founded by Kyle and Pattie Petty, and HSBC North America Holdings Inc. She also has served as a founding member of The Coca-Cola Company's Women's Leadership Council.</p>
                    </div>
                </div>


                <div class="item">
                    <img src="img/marc.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Marc Hedlund</h3><h4> | Board Member</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Marc Hedlund is VP Engineering at Etsy, leading a 120-person team responsible for development of Etsy's peer-to-peer marketplace for handmade and vintage goods. Previously, he worked as Chief Product Officer at Daylife. In 2005, Marc co-founded Wesabe, a personal finance web site, and served as its Chief Product Officer, later becoming its CEO. Before Wesabe, he was an Entrepreneur-in-Residence at O'Reilly Media, where he came up with the idea for Wesabe, and helped develop O'Reilly AlphaTech Ventures (OATV), O'Reilly's VC fund. Marc has also worked as VP Engineering at Sana Security, and co-founded Popular Power, serving as its CEO. Prior to this, Mr. Hedlund served as General Manager and Founder of Lucas Online, the Internet division/subsidiary of Lucasfilm, before and during the launch of Star Wars: Episode I - The Phantom Menace. Early in his career, Marc worked as Director of Engineering of Organic Online and Chief Technology Officer of Webstorm, where he wrote one of the first Internet shopping cart applications in 1994. Marc currently serves as a Director of FluidInfo, Inc. He is a graduate of Reed College, and lives in Brooklyn, New York with his wife Gabrielle, and their children Juniper and Carver.</p>
                    </div>
                </div>


                <div class="item">
                    <img src="img/amber.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Amber Saloner Tennant</h3><h4> | Board Member</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Amber Saloner oversees Product and Mobile Operations at Facebook. She leads the teams responsible for improving product quality, developing operational systems to support new products, producing the Help Center, and supporting Facebook's users in Asia Pacific. Prior to Facebook, Amber worked at Teach For America, where she led pacific coast recruitment. She also served for two years as a Teach For America corps member, teaching fourth and fifth grade in Bedford-Stuyvesant, Brooklyn. Amber received her B.A. and MBA degrees from Stanford University. 
</p>
                    </div>
                </div>


                <div class="item">
                    <img src="img/amy.jpg" alt="">
                    <div class="carousel-title">
                        <h3>Amy Schapiro</h3><h4> | Program Manager</h4>
                    </div>
                    <div class="carousel-caption">
                        <p>Amy Schapiro comes to CODE:2040 with experience in non-profit program and organizational development with high-risk communities. She received her Bachelor’s from Emory University and then worked as an educator for the Madrid Department of Education as well as at a Boys and Girls Club in the Bay Area. She subsequently managed the roll-out of a national digital corporate responsibility campaign focused on community development through youth activism at a technology start-up, in partnership with Nike. Amy later designed workforce development programs and worked in grant making in New York City while completing her Master’s of Science in Social Work from Columbia University. She is fluent in Spanish and passionate about breaking cycles of poverty through providing awareness and access to meaningful educational and professional opportunities for young people.</p>
                    </div>
                </div>





            </div>
            <a class="left carousel-control" href="#teamCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#teamCarousel" data-slide="next">›</a>
        </div>

    </div>
</div>

<div class="row" id="apply">
    <div class="span3 offset1">
        <h1>APPLY</h1>
    </div>
    <div class="span10 offset1">
        <p>If you’re an awesome coder, an undergraduate or graduate student returning to school next fall, and interested in the fast-paced world of Silicon Valley startups, then you’re in the right place. Are you ready to apply to become a Summer 2013 CODE2040 fellow? Here's the process:</p>
        <p><strong>Written Application:</strong> <a href="https://docs.google.com/a/code2040.org/spreadsheet/viewform?formkey=dGNTRm9NUXBJb3JZZzFtajVkZldOU2c6MQ#gid=0">Click here</a> for the written application.</p>
        <p><strong>Coding Exam:</strong> Once we receive your application, we will email you instructions to take the online coding exam. You will be able to answer the questions in the coding exam in whichever coding language you know best.</p>
        <p><strong>Phone Interviews:</strong> After you take the coding exam, we will hold phone interviews with finalists.</p>
        <p><strong>Matching:</strong> Our matching process ensures that both fellows and companies are stoked about the internship placement.</p> 
        <p><strong>Deadlines:</strong> The first deadline to apply is October 31st. Applicants who complete the initial written application by that date will get priority. Please complete the coding exam as quickly as possible after we send you the exam instructions. The second and final deadline to apply is February 28. We will be accepting applicants on a rolling basis after October 31st, so the earlier you submit your application, the better chances you have!</p>
        <p>Still have more questions about the process? If you review the content of the rest of our site and still have more questions, please send us a note on the Contact Us page. </p>
    </div>
</div>

<div class="row" id="partners">
    <div class="span3 offset1">
        <h1>PARTNERS</h1>
    </div>
    <div class="span10 offset1">
        <p>The CODE2040 program wouldn't be possible without the help of our fantastic partners, who have offered their resources and time to our organization. We are incredibly thankful for their help.</p>
        <div id="partnersCarousel" class="carousel slide" data-interval="6000">
            <div class="carousel-inner">
                <div class="item">
                    <img src="img/kauffman.jpg" alt="">
                    <div class="carousel-caption">
                        <p>The Ewing Marion Kauffman Foundation was established in the mid-1960s by the late entrepreneur and philanthropist Ewing Marion Kauffman. Based in Kansas City, Missouri, the Kauffman Foundation is among the thirty largest foundations in the United States with an asset base of approximately $2 billion. The foundation's vision is to foster “a society of economically independent individuals who are engaged citizens, contributing to the improvement of their communities.” In service of this vision, and in keeping with its founder’s wishes, the foundation focuses our grant making and operations on two areas: advancing entrepreneurship and improving the education of children and youth. We carry out our mission through four programmatic areas: Entrepreneurship, Advancing Innovation, Education, and Research and Policy.</p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="img/andreesen.jpg" alt="">
                    <div class="carousel-caption">
                        <p>Andreessen Horowitz was established in June 2009 by entrepreneurs and engineers Marc  Andreessen and Ben Horowitz, based on their vision for a new, modern VC firm designed to support today’s entrepreneurs. Andreessen and Horowitz have a track record of investing in,  building and scaling highly successful businesses. Andreessen Horowitz is based on Sand Hill  Road in Menlo Park, California.</p>
                    </div>
                </div>
                
                
                <div class="item">
                    <img src="img/tc.jpg" alt="">
                    <div class="carousel-caption">
                        <p>TechCrunch is a leading technology media property, dedicated to obsessively profiling startups, reviewing new Internet products, and breaking tech news. Founded in June 2005, TechCrunch reaches million unique visitors every day though it's breaking coverage and in-depth profiles of the people, companies and trends shaping the industry. CrunchBase, TechCrunch's open database about has become a leading statistical resource for technology companies and transactions. TechCrunch also hosts major conferences and events, including the Disrupt series, The Crunchies Awards, and various meet-ups worldwide serving as community platforms for industry conversation and collaboration.</p>
                        <p>AOL Inc. (NYSE: AOL) is a brand company, committed to continuously innovating, growing, and investing in brands and experiences that inform, entertain, and connect the world. The home of a world-class collection of premium brands, AOL creates original content that engages audiences on a local and global scale. AOL helps marketers connect with these audiences through effective and engaging digital advertising solutions. </p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/etsy.jpg" alt="">
                    <div class="carousel-caption">
                        <p>Etsy is the marketplace we make together. Etsy enables people anywhere to easily build and directly exchange with independent, creative businesses. Etsy's mission is to craft the new economy where self-sufficiency, durability, and well-being are the key measures of success. The engineers who make Etsy make our living creating something we love: software.  Etsy thinks of its code as craft.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/ogilvy.jpg" alt="">
                    <div class="carousel-caption">
                        <p>Ogilvy Youth, the newest global marketing practice at Ogilvy, is focused on all matters Gen Y.  In 2010, 51% of the global population was under age 30.  In the U.S., Gen Y is the dominant cohort, comprising 25% of the population. Youth are the digital natives, the global citizens, and the savviest generation to date.  We help our clients understand this next great wave of consumers from all angles, including planning, thought leadership, strategy, creating marketing programs, digital and social media, and creative partnerships.</p>
                    </div>
                </div>
                
                
                <div class="item">
                    <img src="img/wsgr.jpg" alt="">
                    <div class="carousel-caption">
                        <p>Pro bono counsel for PROJECT:2040 is provided by Wilson Sonsini Goodrich & Rosati. Wilson Sonsini Goodrich & Rosati is the premier legal advisor to technology, life sciences, and other growth enterprises worldwide. The firm represents companies at every stage of development, from entrepreneurial start-ups to multibillion-dollar global corporations, as well as the venture firms, private equity firms, and investment banks that finance and advise them. The firm's broad range of services and practice areas are focused on addressing the principal challenges faced by the management, boards of directors, shareholders, and in-house counsel of its clients. </p>
                    </div>
                </div>

                <div class="item">
                    <img src="img/svcf.jpg" alt="">
                    <div class="carousel-caption">
                        <p>Silicon Valley Community Foundation makes all forms of philanthropy more powerful. The Silicon Valley Community Foundation serves as a catalyst and leader for innovative solutions to the region’s most challenging problems. The community foundation has more than $2 billion in assets under management and more than 1,500 philanthropic funds. As Silicon Valley’s center of philanthropy, the foundation provides individuals, families and corporations with simple and effective ways to give locally and around the world. Find out more at www.siliconvalleycf.org</p>
                    </div>
                </div>



            <a class="left carousel-control" href="#partnersCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#partnersCarousel" data-slide="next">›</a>
        </div>
    </div>
</div>
</div>
<div class="row" style="margin: 0 auto; width: 90%;">
    <hr style="border: none; height: 1px; color: #b0b0b0; background: #b0b0b0;"/>
    <p style="font-size: 16px; color: #b0b0b0;">Copyright &copy; 2012, code2040.  All rights reserved.</p>
</div>
</body>
</html>

