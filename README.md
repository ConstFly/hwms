# Hello World Micro-service

The goal of the project is to provide examples of how to build a basic micro-service using different platforms.  While the examples cover different languages, frameworks, and situations, the basic concept will remain the same throughout.  This allows the code to be used as either a quick reference, or as a comparison.

The project has 4 parts:

  1. The core application.  This is the part that represents the work we would like to be done.
  1. A stand-alone application.  This is a traditional application that includes the core into and does some work.
  1. The service provider.  This wraps up the core and makes it accessible as a micro service.
  1. The consumer.  A separate application that calls on the service.

  This should be pretty straight forward, with the exception of the stand-alone application.  If you build your code in a modular fashion, you should be able to make use of that code in different scenarios.  Here we represent two scenarios - the stand-alone application and the service provider.  Both should be able to function by making use of the core application in different ways.

# Core Application Considerations

This is a Hello World application.  Therefore our core application will not do anything fancy.  It will just provide a way to return a message.  For our purposes we will call this method `getMessage` with no parameters.  The code that provides the `getMessage` method will be built in a modular way so it can be called elsewhere.  Imagine getMessage was more ambitious though - it could take in parameters, do database lookups, call out to other service providers, or more.  That all is beyond the scope of a Hello World example though.
