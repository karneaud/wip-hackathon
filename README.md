# SafeTTTaxi PaaS

Concept of proof prototype for developing a Platform as a Service datasource API web service of Taxi information for client use.


### Synopsis

*Wanted to create a low budget utility app that would be used to help verify valid Taxi transportation for general travelling public.*

## Resources

* Uses latest [Lumen Framework](https://lumen.laravel.com/) 
* Currently uses [Google Sheets](https://www.google.com/sheets/about/) as it's data source but can be adapted to use a more efficient data source (looking into [Airtable](https://airtable.com) as another light weight alternative)
* Uses [Google Scripts](https://script.google.com/) to read the Google Sheet data and output a json data to consume
* [Bootstrap](https://getbootstrap.com) For the cosmetics
* [Google Fonts](https://fonts.google.com) For the cosmetics

## Requirements

* PHP min. >= 7.2, >= 7.4 (recommended) 
* Access to Google Sheet with a Google Forms

## Installation

For devs clone the git and run `composer install`

## Usage

Experimental at the moment but this suppose to be a interfacing service for clients and not really end user. But I do have a default client facing app. but 

* Visit the relative path /taxi/driver/create and create a taxi record.
* Visit the relative path /taxi/driver/print/ or /taxi/driver/print/***id*** where *id* is the record id of the information to use
* Visit the / path to use a default demo app to scan the generated qr code and access the information as well as some basic sharing features.
* Users can save the app to their device home screen for future use.

## ToDo

* Need to make the application more modular so users can change parameters to suit
* Integrate automated SMS services
* Evolve data source



## License

[MIT](https://choosealicense.com/licenses/mit/)