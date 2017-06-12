# Mautic Email Sent Webhook

Bundle features:
* Make a HTTP request everytime an email is sent!

![example](https://photos-4.dropbox.com/t/2/AAD4m14mjxpqhydvCTMIxXjrfAIMk7wN5W-DGrJo00v1yw/12/32608586/png/32x32/3/1497312000/0/2/mautic-emailSent-example.png/EMuK2xgY6-EJIAcoBw/mijYDP8hjtX65wEa--xQOdOhiu8s2ZHeRcHw1rtJKf8?dl=0&size=1280x960&size_mode=3)

## Quick Start:

1. Clone this repo inside your mautic plugins directory

```bash
git clone https://github.com/gugacavalieri/mautic-sentEmail-webhook.git
```
2. Clean cache using symfony commands
```
php app/console cache:clear
```
3. Open Mautic Plugins Page and configure:
* Webhook URL
* API Key (for validating request at server side)
* Mautic Base URL for View In Browser URL

## FAQ

### What is the Webhook URL parameter?

This is the Web Address (HTTP, HTTPS) that will be called after Mautic sends a
new email !

### What is the API Key Parameter?

The API Key parameter will be sent along with the HTTP request so that this
could be validated at your server. It's just a signature for validating the
request if wanted :)

### Why do I need to fill in the Mautic Base Url?

This parameter will be used for composing the JSON message, adding a field called
"viewUrl". This link contains the web address in which the Mautic Email can be
viewed using a Web Browser
