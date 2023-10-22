#------------------------------------------------------------------------------
#  Author:                Chase Sonnemaker
#  Written:               1/14/2019
#  Last modified:         2/3/2019
#
#  The initial cleaning of the data and removal of unused variables 
#------------------------------------------------------------------------------

#Setup
#Note 1: data is downloadable as an excel file, we used RStudio's
#built in "Inport Dataset" to import the data and assign the appropriete
#data type to each variable. The result was named X2018 then saved as cb2018.rdata.
#Note 2: We also checked the second set available of Kaggle to make sure
#all the projects from 2016 were also in 2018. Since they were, we made
#no changes to 2018 and removed 2016 from use.
load("cb2018.rdata")

#Creating a percent goal variable
X2018$percentGoal <- X2018$usd_pledged_real/X2018$usd_goal_real

#Replacing infinite values with 0
X2018$percentGoal[X2018$percentGoal == Inf] <- 0

#Reorganizing the dataframe and removing unwanted variables
#Note: There are no NAs in usd_goal_real and usd_pledged_real
#so these will be the goal and pledged variables used
k2018 <- data.frame(X2018$ID, X2018$name, X2018$category, X2018$main_category, X2018$launched, X2018$deadline, X2018$country, X2018$currency, X2018$usd_goal_real, X2018$usd_pledged_real, X2018$percentGoal, X2018$backers, X2018$state)

#New column names
colnames(k2018) <- c("id", "name", "category", "mainCategory", "launch", "deadline", "country", "currency", "usdGoal", "usdPledged", "percentGoal", "backers", "state")

#Removing launch dates from 1970
k2018$launch[k2018$launch == 3600] <- NA

#Creating an indicator variable that judges failure or success
#of a project based on whether the pledge met or exceeded the goal
k2018$indicator <- ifelse(k2018$usdPledged >= k2018$usdGoal, 1, 0)

#Saving new dataframe
save(k2018, file = "k2018.rda")

#Write as a CSV file
write.csv(k2018, "kCSV2018.csv")