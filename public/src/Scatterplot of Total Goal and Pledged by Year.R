#Author: Chase Sonnemaker
#Updated: 2/3/2019
#Creating a Scatterplot of Total Goal and Total Pledged by Year

#Setup
load("k2018new.rda")
library(ggplot2)
k2018 <- k2018_new

#Creating a "Year" variable
k2018$year <- as.numeric(format(k2018$launch, format = "%Y"))

#Creating a dataframe of aggragated variables by year
#Preparing variables
yearly1 <- aggregate(k2018["usdPledged"], by = k2018["year"], sum)
yearly2 <- aggregate(k2018["usdGoal"], by = k2018["year"], sum)
yearly3 <- aggregate(k2018["indicator"], by = k2018["year"], sum)
yearly4 <- aggregate(k2018["backers"], by = k2018["year"], sum)

#Creating a dataframe for the yearly number that failed
yearly0 <- data.frame(table(k2018$year))
colnames(yearly0) <- c("year", "numberProjects")
yearly5 <- data.frame(yearly0$numberProjects - yearly3$indicator)
yearly5$year <- c(2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018)
colnames(yearly5) <- c( "numberFailed", "year")

#Combining this dataframe with other variables to create a master dataframe
yearly <- merge.data.frame(yearly1, yearly2, by = "year")
yearly <- merge.data.frame(yearly, yearly3, by = "year")
yearly <- merge.data.frame(yearly, yearly4, by = "year")
yearly <- merge.data.frame(yearly, yearly0, by = "year")
yearly <- merge.data.frame(yearly, yearly5, by = "year")

#Removing 2018
yearly17 <- yearly[-10, ]

#Scatterplot of Total Goal and Total Pledged by Year
byYear <- ggplot(data = yearly17, aes(x = year, y = usdGoal)) + geom_line(aes(col = "Total Goal (USD)"), show.legend = TRUE) + geom_point(aes(col = "Total Goal (USD)"))
byYear2 <- byYear +  geom_line(data = yearly17, aes(x = year, y = usdPledged, col = "Total Pledged (USD)"), show.legend = TRUE) + geom_point(data = yearly17, aes(x = year, y = usdPledged, col = "Total Pledged (USD)"))
byYear3 <- byYear2 + scale_x_continuous(name = "Year", breaks = c(2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018), labels = c(2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018)) + scale_y_continuous(name = "Money (USD)", breaks = c(0, 2000000000, 4000000000, 6000000000), labels = c("0", "2 Billion", "4 Billion", "6 Billion")) + ggtitle("Total Goal and Pledged by Year") + labs(col = "")
