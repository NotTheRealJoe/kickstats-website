#Author: Chase Sonnemaker
#Updated: 2/3/2019
#Creating a Barplot of Success Rate by Country

#Setup
load("k2018new.rda")
library(ggplot2)
k2018 <- k2018_new

#Finding the number of successes in each country
country1 <- aggregate(k2018["indicator"], by = k2018["country"], sum)

#Finding the number of projects in each country
country2 <- data.frame(table(k2018$country))
colnames(country2) <- c("country", "numProjects")

#Creating a single dataframe out of both
country3 <- merge.data.frame(country1, country2, by = "country")

#Removing the nonexistant country
country3 <- country3[-17, ]

#Finding the percent success for each country and ordering by percent success
country3$percentS <- country3$indicator/country3$numProjects * 100
country3 <- country3[order(country3$percentS),]

#Creating a barplot of percent success by country
barplotCountry <- ggplot(data = country3, aes(x = reorder(country, -percentS), y = percentS)) + geom_col(fill = "blue")
bpCountry <- barplotCountry + ggtitle("Percent of Projects that are Successful by Country") + xlab("Country") + ylab("Percent Success")
