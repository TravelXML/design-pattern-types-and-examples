# Design Patterns Types and Examples
Top 10 Design Pattern — Types, Examples

## Overview
![1_Q8AUrqqdk1cPkf1_2y_N_g (1) (1)](https://github.com/TravelXML/design-pattern-types-and-examples/assets/8361967/869cf60b-b182-45d3-9d3c-550de9ab0b79)


A “design pattern” is a reusable solution to a commonly occurring problem within a given context in software design. Design patterns are formalized best practices that the programmer can use to solve common problems when designing an application or system.


## Key Characteristics of Design Patterns:
#### Reusable:  Design patterns provide solutions that are not tied to a specific problem, making them reusable in different scenarios.
#### Proven: These patterns have been evolved and proven over time by the developer community, ensuring they are reliable.
#### Expressive: They provide a standard terminology and are specific to particular scenarios, making them easy to understand and communicate.

This repository provides a collection of design pattern examples implemented in PHP. Each directory contains the implementation of a specific design pattern along with a detailed explanation, use case, and instructions on how to run the examples. Design patterns are essential in software engineering as they provide proven solutions to common design problems.

## Table of Contents

1. [Adapter Pattern](#adapter-pattern)
2. [Caching Pattern](#caching-pattern)
3. [Circuit Breaker Pattern](#circuit-breaker-pattern)
4. [Factory Pattern](#factory-pattern)
5. [Load Balancer Pattern](#load-balancer-pattern)
6. [Observer Pattern](#observer-pattern)
7. [Repository Pattern](#repository-pattern)
8. [Singleton Pattern](#singleton-pattern)
9. [Strategy Pattern](#strategy-pattern)

## Adapter Pattern

**Overview:** Allows incompatible interfaces to work together by acting as a bridge.

**Use Case:** Integrating legacy code with new systems.

[More Details](./Adapter%20Pattern%20)

## Caching Pattern

**Overview:** Temporarily stores data in accessible storage to reduce access time and improve performance.

**Use Case:** Caching frequently accessed resources in web applications.

[More Details](./Caching%20Pattern)

## Circuit Breaker Pattern

**Overview:** Detects failures and prevents the system from constantly retrying requests that are likely to fail.

**Use Case:** Handling failures in a microservices architecture.

[More Details](./Circuit%20Breaker%20Pattern)

## Factory Pattern

**Overview:** Creates objects without specifying the exact class of object that will be created.

**Use Case:** When the exact types and dependencies of the objects to be created are not known until runtime.

[More Details](./Factory%20Pattern)

## Load Balancer Pattern

**Overview:** Distributes incoming network traffic across multiple servers to ensure no single server bears too much demand.

**Use Case:** Managing web server load to improve availability and reliability.

[More Details](./Load%20Balancer%20Pattern)

## Observer Pattern

**Overview:** Defines a one-to-many dependency between objects so that when one object changes state, all dependents are notified and updated automatically.

**Use Case:** Implementing distributed event-handling systems.

[More Details](./Observer%20Pattern)

## Repository Pattern

**Overview:** Encapsulates the logic needed to access data sources, mediating between the domain and data mapping layers.

**Use Case:** Centralizing data logic or business logic in applications.

[More Details](./Repository%20Pattern)

## Singleton Pattern

**Overview:** Ensures a class has only one instance and provides a global point of access to it.

**Use Case:** Managing shared resources like database connections or configuration settings.

[More Details](./Singleton%20Pattern)

## Strategy Pattern

**Overview:** Defines a family of algorithms, encapsulates each one, and makes them interchangeable.

**Use Case:** Selecting an algorithm at runtime, such as different payment methods.

[More Details](./Strategy%20Pattern)

## How to Run

1. **Clone the repository:**
   ```sh
   git clone https://github.com/TravelXML/design-pattern-types-and-examples.git
   ```

2. **Navigate to the desired pattern directory:**
   ```sh
   cd design-pattern-types-and-examples/<Pattern\ Directory>
   ```

3. **Run the PHP script:**
   ```sh
   php client.php
   
[More](https://apige.medium.com/design-pattern-types-cases-and-examples-6a3e4f26926b)
   ```

