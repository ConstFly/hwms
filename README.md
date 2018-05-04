# Hello World Micro-service

The goal of the project is to provide examples of how to build a basic micro-service using different platforms.  While the examples cover different languages, frameworks, and situations, the basic concept will remain the same throughout.  This allows the code to be used as either a quick reference, or as a comparison.

The project has 4 parts:

  1. The core application.  This is the part that represents the work we would like to be done.
  1. A stand-alone application.  This is a traditional application that includes the core into and does some work.
  1. The API / service provider.  This wraps up the core and makes it accessible as a micro service.
  1. The consumer.  A separate application that calls on the service.

  This should be pretty straight forward, with the exception of the stand-alone application.  If you build your code in a modular fashion, you should be able to make use of that code in different scenarios.  Here we represent two scenarios - the stand-alone application and the service provider.  Both should be able to function by making use of the core application in different ways.

## Core Application Considerations

This is a Hello World application.  Therefore our core application will not do anything fancy.  It will just provide a way to return a message.  For our purposes we will call this method `getMessage` with no parameters.  The code that provides the `getMessage` method will be built in a modular way so it can be called elsewhere.  Imagine getMessage was more ambitious though - it could take in parameters, do database lookups, call out to other service providers, or more.  That all is beyond the scope of a Hello World example though.

## Standalone Application Considerations

The only purpose for the standalone application is to prove that our core application functions AND can be reused in other projects if/when desired.

## API considerations

APIs normally have [CRUD](https://en.wikipedia.org/wiki/Document-oriented_database#CRUD_operations) capabilities allowing retrieval of all records, a single record, and updating/removing records.  The Hello World system does not need all this.  Instead it simply needs the "get" operation to see the hard coded message.  We'll leave it to you to expand on this if desired.  But this means a simple HTTP GET request is all that is needed for our API.

## The consumer application considerations.

The consumer is often not in the same environment as the API.  For instance, a [Vue.JS](https://vuejs.org/) front end application may consume a PHP based API.  And the lines between these can sometimes be blurred even.  Our code though tries to stick to the target environment.  So, the Native PHP API will also have a Native PHP consumer.  This may not always be convenient, but it does allow us to explore different languages and techniques for consuming APIs.
