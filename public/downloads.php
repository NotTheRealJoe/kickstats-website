<!DOCTYPE html>
<html>
<head>
    <?php require('snippets/head.xhtml'); ?>
</head>

<body>
    <?php require('snippets/nav.xhtml'); ?>
    <div class="content-block">
        <h1 id="downloads">Downloads</h1>
        <h2 id="downloads-reports">Reports and Presentation Slides</h2>
        <p>If you would like, you can view the written report our group submitted, and the slides that were presented to
            the class.</p>
        <div class="multi-button">
            <p class="title">Written Report</p>
            <a class="multi-component" href="https://docs.google.com/document/d/1Jf2nuMYwBfHUHAgHspy3PtFMQH0kMzFNWuSzMyWp3rk/edit?usp=sharing">Google Docs</a>
            <a class="multi-component" href="documents/Final_Paper.pdf">PDF</a>
        </div>
        <div class="multi-button">
            <p class="title">Presentation Slides</p>
            <a class="multi-component" href="documents/Kickstats_Final_Presentation.pptx">PPTX</a>
            <a class="multi-component" href="documents/Kickstats_Final_Presentation.pdf">PDF</a>
        </div>

        <h2>Data Files</h2>
        <div class="multi-button">
            <p class="title">Master Data Frame</p>
            <p class="subtitle">Contains data released by Mickaël Mouillé on Kaggle licensed under CC BY-NC-SA 4.0.</p>
            <a class="multi-component" href="data/k2018.Rda">R Data File</a>
        </div>

        <h2 id="downloads-code">Source Code</h2>
        <h3>Data Cleaning</h3>
        <p>Here is the R code we used to do preliminary cleanup of the data set.</p>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Initial_Clean.R">Initial_Clean.R</a>
        </div>

        <h3>Visualizations</h3>
        <p>Chase made a number of visualizations for the project, which are also seen in the
            <a href="#downloads-reports">paper and presentation slides</a>.</p>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Barplot%20of%20Number%20of%20Projects%20by%20Year.R">Barplot of Number of Projects by Year.R</a>
        </div>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Barplot%20of%20Success%20Rate%20by%20Country.R">Barplot of Success Rate by Country.R</a>
        </div>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Boxplot%20of%20Goal%20and%20Pledged%20Amount.R">Boxplot of Goal and Pledged Amount.R</a>
        </div>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Scatterplot%20of%20Failed%20and%20Successful%20Projects%20over%20Time.R">Scatterplot of Failed and Successful Projects over Time.R</a>
        </div>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Scatterplot%20of%20Total%20Backers%20by%20Year.R">Scatterplot of Total Backers by Year.R</a>
        </div>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Scatterplot%20of%20Total%20Goal%20and%20Pledged%20by%20Year.R">Scatterplot of Total Goal and Pledged by Year.R</a>
        </div>
        <div class="multi-button">
            <a class="multi-component singular" href="src/Treemap%20of%20Totals.R">Treemap of Totals.R</a>
        </div>

        <h3>Additional Data Scraper</h3>
        <p>This is the program we used to grab additional data from Kickstarter using the existing project names and ID
            numbers from our Kaggle data. To be able to make an appropriate request, the scraper itself is implemented in
            Python and is called from R using the <code>rPython</code> package.</p>
        <p>The Python program uses a Virtualenv, so if you are on a UNIX system, use the .tar.gz to make sure the
            permissions are maintained correctly.</p>
        <div class="multi-button">
            <p class="title">creator_scraper Archive</p>
            <a class="multi-component" href="src/creator_scraper.tar.gz">.tar.gz for UNIX systems</a>
            <a class="multi-component" href="src/creator_scraper.zip">.zip for Windows systems</a>
        </div>

        <h3>Wordcloud</h3>
        <p>This set of programs generated a word cloud showing the frequency of word use in the "blurb" fields of the
            Kickstarter projects.</p>
        <div class="multi-button">
            <a class="multi-component singular" href="src/wordcloud.zip">wordcloud.zip</a>
        </div>

        <h3><code>CopyNewCols.R</code></h3>
        <p>A small utility program for merging two versions of the dataframe together. While the scraping program
            (above) was running, other members of the group had made advancements in the dataframe, so the two branches
            of changes needed to be merged. This program accomplishes that.</p>
        <div class="multi-button">
            <a class="multi-component singular" href="src/CopyNewCols.R">CopyNewCols.R</a>
        </div>

        <h3>Percent Goal App</h3>
        <p>This is the source for the model prediction app in the demo above. The archive contains the data files, all
            the source needed to generate the model, as well as the source code for turining it into the Shiny app itself.</p>
        <div class="multi-button">
            <a class="multi-component singular" href="src/PercentGoalApp.zip">PercentGoalApp.zip</a>
        </div>
    </div>
</body>
</html>