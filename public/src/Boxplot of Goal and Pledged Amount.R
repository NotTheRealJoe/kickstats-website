#Author: Chase Sonnemaker
#Date: 2/3/2019
#Creating a Boxplot of Goal and Pledged Amount

#Setup
load("k2018new.rda")
k2018 <- k2018_new

#Creating the boxplot
boxplot(k2018$usdGoal, k2018$usdPledged, 
        main = "Project Goal and Pledged Amounts \nwithout Outliers",
        at = c(1, 4),
        names = c("Goal \nAmount", "Pledged \nAmount"),
        col = c("red","blue"),
        border = "black",
        horizontal = TRUE,
        notch = TRUE,
        outline = FALSE,
        xlab = "Money (USD)"
)

