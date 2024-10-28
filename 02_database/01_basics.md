# Basics of RDBMS and MySQL

## 1. Introduction to RDBMS

- **RDBMS (Relational Database Management System)** is a type of database management system (DBMS) that stores data in a structured format, using rows and columns.
- **Key Features**:
  - Data is organized in tables.
  - Tables can be linked (related) using foreign keys.
  - Supports operations like CRUD (Create, Read, Update, Delete).

## 2. Key Concepts in RDBMS

- **Table**: A collection of related data entries. Example: Customers, Orders.
- **Row**: A single record in a table. Example: A single customer.
- **Column**: A single field in a table. Example: Customer Name, Order Date.
- **Primary Key**: A unique identifier for a record in a table.
- **Foreign Key**: A field that links one table to another.

## 3. Introduction to MySQL

- **MySQL**: An open-source RDBMS that uses Structured Query Language (SQL).
- **Features**:
  - Scalable, easy to use.
  - Supports ACID transactions (Atomicity, Consistency, Isolation, Durability).
  - Wide range of built-in functions.

## 4. Basic MySQL Commands

- **Creating a Database:**

  ```sql
  CREATE DATABASE database_name;
  ```

- **Creating a Table:**

  ```sql
  CREATE TABLE table_name (
  column1 datatype PRIMARY KEY,
  column2 datatype,
  column3 datatype
  );
  ```

- **Inserting Data:**

  ```sql
  INSERT INTO table_name (column1, column2, column3)
  VALUES (value1, value2, value3);
  ```

- **Querying Data:**

  ```sql
  SELECT column1, column2
  FROM table_name
  WHERE condition;
  ```

---

### NOTE

- You Must Have Basic Understanding Of SQL Commands To Proceed Further. I Am Not Covering SQL In This PHP Documentation.
- Although If You Had Used SQL And Have Basic Understanding Of It's Commands Then You Can Proceed.
- Adn If Not, You Can Learn SQL From [Here](Https://www.w3schools.com/mysql/mysql_sql.asp). Don't Try To Learn Everything Mentioned On The Website.
- Just Take Basic Syllabus From Internet And Learn That. Remember You Don't Need To Be A Master In SQL Right Now.
