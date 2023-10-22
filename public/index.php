<!DOCTYPE html>
<html>
<head>
    <?php require("snippets/head.xhtml"); ?>
</head>

<body id="top">
    <?php require("snippets/nav.xhtml"); ?>
    <div class="content-block bordered">
        <h1 id="about">About our project</h1>
        <p><a href="https://kickstarter.com">Kickstarter</a> is a funding platform which allows for creators to help
            bring their ideas to reality. It supports a wide variety of projects, many of which have enjoyed widespread
            commercial success, including the card game
            <a href="https://www.kickstarter.com/projects/elanlee/exploding-kittens">Exploding Kittens</a> and the
            <a href="https://www.kickstarter.com/projects/getpebble/pebble-time-awesome-smartwatch-no-compromises">Pebble
            Smart Watch</a>. Long before they were even commercially sold, both of these projects had campaigns not only
            met their funding goals, but far exceeded their stretch goals. This is the dream for any entrepreneur who
            wants to use Kickstarter, but it isn’t easily attainable. In the shadow of every high profile project, there
            are thousands of utter failures that don’t even make their funding goals. For some projects like  The Dual
            Shower Heads for Two, or the "completely true"
            <a href="https://www.kickstarter.com/projects/112944064/samurai-mary-vs-ninja-jews-the-birthing-of-christ">Animated
            Adventures of Samurai Mary vs. Ninja Jews (The Birthing of Christ)</a> it can seem obvious as to why some of
            these ridiculous projects didn’t get any funding. But often it isn’t as cut and dry. For example, an annual
            calendar that helps support cat animal rescues didn’t make its funding, while a project to help someone make
            a potato salad for themselves made over $55,000. This begs the question, what makes a successful
            Kickstarter? It has to be more than just having a killer idea at the right moment. For our project,
            <i>Kickstats</i>, we wanted to uncover any factors of success behind Kickstarter projects and see if there
            are any specific measures a project can take to ensure its goals can be met.</p>
    </div>
    <div class="content-block bordered">
        <h1 id="overview">Overview of our Analysis</h1>
        <p>While most of our work is described in our <a href="#downloads-reports">paper</a>, we have a page with an
        overview of the higher-level parts of our analysis, and some of the visualizations we produced.</p>
        <div class="multi-button">
            <a href="overview.php" class="multi-component singular">Go to overview</a>
        </div>
    </div>

    <div class="content-block bordered">
        <h1 id="shiny-demo">Try your Kickstarter idea!</h1>
        <p>Got an idea for a project? We created a linear model based on the dollar amount, category, and whether your
        project is a staff pick or not. You can enter your hypothetical project in the form below to see what our data
        says about projects with those properties.</p>
        <p>The application was made with R Shiny. You can also
            <a href="https://kickstats.shinyapps.io/percentgoalapp/">view it directly on shinyapps.io</a>. The source
            code for the model and Shiny app is available in the <a href="#downloads">downloads</a> section.</p>
        <iframe class="shiny-app" src="https://kickstats.shinyapps.io/percentgoalapp/"></iframe>
    </div>

    <div class="content-block bordered">
        <h1 id="what">What is this?</h1>
        <p>This is our class project for CSC/STA 223: "Introduction to Data Science" at
            <a href="https://cornellcollege.edu">Cornell College</a>, taught by
            <a href="https://www.cornellcollege.edu/academics/our-faculty/faculty-profile/index.php/show/acannon">Ann Cannon</a>
            and
            <a href="https://www.cornellcollege.edu/academics/our-faculty/faculty-profile/index.php/show/tdelaubenfels">Tony deLaubenfels</a>
            in January 14 through February 6, 2019. In the first week of the class, each student looked at the web and
            other resources for data collections, and made a proposal to the class. Students voted for their preferred
            projects, and were divided into groups of four for the remainder of the class, working on their preferred
            project. The initial idea for this project was presented by Ben.
        </p>
    </div>

    <div class="content-block bordered">
        <h1 id="data-sources">Data Sources</h1>
        <p>We obtained our original data from <a href="https://www.kaggle.com/kemical/kickstarter-projects">a post on
            Kaggle by Mickaël Mouillé</a>. We got some additional data for many of the records in that dataset by
            scraping Kickstarter's advanced search API as described in our <a href="#downloads-reports">report</a>.</p>
    </div>
</body>
</html>
