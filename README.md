Team-CoGeo
==========

Name of Application: CoGeo
Team name: CoGeo
Members of team: Liam Shaw, Chris Wright, Chuning Song, Kingsley Advanti
Third Party API's/Code: Bootstrap, Google Places, Google Maps, AWS
Access to CoGeo: 54.79.6.99


Description:

CoGeo is a completely novel way for finding the best things for you to do. It's novel because it
matches places with feelings and then lets you search for places based on how you're feeling!

The feeling tags are crowd sourced and matched to places by using the upload functionality 
(see 'uploaded spots' on the website).

Places are processed and stored using AWS. We use dynamodb to store place information and
feeling tags, and ec2 for processing.

Users are able to search for places by using the search functionality on the website. 

Users simply drag the sliders to indicate how they are feeling, or would like to feel. Each 
slider represents a spectrum, for example the 'Chatty' slider displays the level of how 'chatty' you
feel can range from 'quiet time' to 'outgoing'.

Users then hit 'search' and 9 search results will be returned, in order of greatest relevance
to least relevance.

Relevancy is based on how well feeling search criteria matches feeling tags on each place. In 
the future we are looking to integrate distance, price, time of day, weather, demographics, and 
past user activity to make the search results more relevant.



****Note: The search functionality and search results funtionality for CoGeo was developed at unihack, 
however the upload functionality was not. 
