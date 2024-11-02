# Medicon Health Care Website

Welcome to the Medicon Health Care project repository. This project provides an online platform for healthcare services, allowing users to manage appointments, payments, and orders. Follow the installation and configuration guidelines below to set up the project.

## Table of Contents
- [Project Overview](#project-overview)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Running the Project](#running-the-project)
- [Troubleshooting](#troubleshooting)
  
## Project Overview

This project, **Medicon Health Care**, is designed to streamline healthcare services, offering appointment scheduling, payment processing, and more.

## Installation

Follow these steps to install and configure the project:

1. **Download the Project Files**: First, download and unzip the project files:
   - Unzip `MediconGroupProject.zip` to extract the project folder.
   
2. **Set Up XAMPP**: If XAMPP is not already installed on your computer, download and install it from [Apache Friends](https://www.apachefriends.org/download.html).

3. **Move Project Files**: Place the extracted `MediconGroupProject` folder inside the `/xampp/htdocs` directory.


## Database Setup

1. **Create Database**: Start XAMPP, open phpMyAdmin, and create a database named `registration`.

2. **Create Tables**: Within the `registration` database, create the following tables:

   - **`user` Table**:
     - Columns: `name` (VARCHAR), `email` (VARCHAR), `NIC` (PRIMARY KEY, VARCHAR), `phoneNo` (VARCHAR), `Gender` (VARCHAR)

   - **`appointment` Table**:
     - Columns: `name` (VARCHAR), `NIC` (PRIMARY KEY, VARCHAR), `phoneNo` (VARCHAR), `date` (DATE), `doctor` (VARCHAR), `reason` (TEXT)

   - **`pay` Table**:
     - Columns: `NIC` (PRIMARY KEY, VARCHAR), `cardnumber` (VARCHAR), `expiryDate` (DATE)
     - Foreign Key: `NIC` references `appointment(NIC)`

   - **`payorder` Table**:
     - Columns: `Amount` (DECIMAL), `itemId` (INT), `cname` (VARCHAR), `pnum` (PRIMARY KEY, VARCHAR), `address` (TEXT), `ZIP` (INT), `cardNumber` (VARCHAR)


## Running the Project

1. **Start XAMPP Servers**:
   - Launch XAMPP and start both the **Apache** and **MySQL** services.

2. **Access the Website**:
   - Open your browser and go to `http://localhost/MediconGroupProject` to access the Medicon Health Care Website.


## Troubleshooting

If you encounter any issues, please check the following:
- Ensure that Apache and MySQL are running in XAMPP.
- Verify that the database and tables are set up correctly in phpMyAdmin.
- Make sure all files are in the correct directory within `/xampp/htdocs`.


## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.


Enjoy exploring Medicon Health Care! If you encounter any problems or have questions, feel free to reach out.
