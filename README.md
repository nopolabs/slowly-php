# slowly-php
A test service providing slow http responses

Usage: http://{host}/{millis}/url/{url} or http://{host}/{millis}/data/{data}

param | meaning
----- | -------
host | The host where this app is running
millis | Time to delay response in milliseconds
url | The URL to redirect to via response
data | Data returned directly as response
