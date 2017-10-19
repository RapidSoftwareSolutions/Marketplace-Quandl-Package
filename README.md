[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Quandl/functions?utm_source=RapidAPIGitHub_QuandlFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)


# Quandl Package
Quandl has a vast collection of free and open data collected from a variety of organizations: central banks, governments, multinational organizations and more. You can use it without payment and with few restrictions.
* Domain: [quandl.com](https://www.quandl.com)
* Credentials: apiKey

## How to get credentials: 
1. To get an API key, please sign up for a free Quandl account. [quandl.com](https://www.quandl.com/account)
2. You can find your API key on your account settings page. [quandl.com](https://www.quandl.com/account/api)
 
## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Quandl.getTimeSeriesData
This call returns data from a specified time-series.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| databaseCode| String     | Code identifying the database to which the dataset belongs.
| datasetCode | Select     | Code identifying the dataset.

## Quandl.getFilteredTimeSeriesData
You can slice, transform and otherwise customize your time-series dataset prior to download by appending various optional parameters to your query.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| databaseCode| String     | Code identifying the database to which the dataset belongs.
| datasetCode | String     | Code identifying the dataset.
| limit       | Number     | Use limit=n to get the first n rows of the dataset. Use limit=1 to get just the latest row.
| columnIndex | Number     | Request a specific column. Column 0 is the date column and is always returned. Data begins at column 1.
| startDate   | DatePicker | Retrieve data rows on and after the specified start date.
| endDate     | DatePicker | Retrieve data rows up to and including the specified end date.
| order       | Select     | Return data in ascending or descending order of date. Default is desc.
| collapse    | Select     | Change the sampling frequency of the returned data.
| transform   | Select     | Change the sampling frequency of the returned data.

## Quandl.getTimeSeriesMetaData
This call returns metadata from a specified time-series.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| databaseCode| String     | Code identifying the database to which the dataset belongs.
| datasetCode | Select     | Code identifying the dataset.

## Quandl.getTimeSeriesAllData
This call returns metadata and data from a specified time-series.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| databaseCode| String     | Code identifying the database to which the dataset belongs.
| datasetCode | Select     | Code identifying the dataset.

## Quandl.filterRows
It is possible to download only certain desired rows from a table, by specifying one or more columns to act as criteria to filter rows. If the value in a given column matches the filter argument, then the row containing that value is returned.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your API key
| datatableCode    | String     | Code identifying the datatable.
| rowFilterCriteria| Select     | The filter examples below all involve the ETFG/FUND table. This particular table is filterable on columns date, ticker, shares_oustanding, nav and flow_daily. This means that users can narrow down their request to rows with specific values of date, ticker, shares_oustanding, nav and flow_daily.
| filterValue      | String     | Filter value. Example: SPY

## Quandl.filterColumns
It is possible to download only certain desired rows from a table, by specifying one or more columns to act as criteria to filter rows. If the value in a given column matches the filter argument, then the row containing that value is returned.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| datatableCode| String     | Code identifying the datatable.
| qoptsColumns | String     | Request data from specific columns by passing the qopts.columns parameter.

## Quandl.filterRowsAndColumns
You can filter on both rows and columns by appending both filter types to your API request.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| Your API key
| datatableCode       | String     | Code identifying the datatable.
| columnFilterCriteria| String     | Column filter string
| rowFilterCriteria   | String     | Rows filter string

## Quandl.getTableMetadata
Get table metadata

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| datatableCode| String     | Code identifying the datatable.

## Quandl.downloadEntrieTable
Alternatively, we have created an exporter function that will download the entire table as a zipped CSV file.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| datatableCode| String     | Code identifying the datatable.

## Quandl.getEntrieTable
Return table entrie

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Your API key
| datatableCode| String     | Code identifying the datatable.

