load("k2018.rda")
load("KickstarterData.rdata")

updatedColNames <- c("creator_name", "staff_pick", "creator_id", "image_url", "blurb")

newColsDF <- X2018[ , updatedColNames]

k2018_new <- cbind(k2018, newColsDF)

colnames(k2018_new)

for(row in 1:nrow(k2018_new)) {
  Encoding(k2018_new[row, "blurb"]) <- "UTF-8"
  iconv(k2018_new[row, "blurb"], "UTF-8", "UTF-8", sub = '')
}

save(k2018_new, file = "k2018_with_scraped_cols.rda")
