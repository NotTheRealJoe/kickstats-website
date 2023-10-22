#Author: Chase Sonnemaker
#Updated: 2/3/2019
#Treemap of Totals From Kickstarter Projects

#Setup
load("k2018new.rda")
library(treemap)
k2018 <- k2018_new

#Creating a "Year" variable
k2018$year <- as.numeric(format(k2018$launch, format = "%Y"))

#Subset successful projects
successSet <- k2018[which(k2018$indicator == 1), ]

#Finding the boxes
#Total Amount Asked For
AG <- sum(k2018$usdGoal)

#Total Amount Pledged
AP <- sum(k2018$usdPledged)

#Total Amount Pledged (made goal)
sucessSet <- k2018[which(k2018$indicator == 1), ]
APG <- sum(successSet$usdPledged)

#Total Amount Made Over Goal
APMG <- sum(successSet$usdPledged) - sum(successSet$usdGoal)

#Left Over Amount
LO <- AG - (AP + APG + APMG)

#Creating a dataframe of totals
frameA <- data.frame(c(LO, AP, APG, APMG))
frameA$total <- c("", "Total Amount Pledged ($3.4B)", "Total Amount Pledged For Successful Projects ($3.1B)", "Total Amount Pledged Over Goal ($1.8B)")
colnames(frameA) <- c("amount", "total")

#Creating the treemap
treemap(dtf = frameA, index = c("total"), vSize = "amount", title = "Total Goal Amount (~$17B)")
