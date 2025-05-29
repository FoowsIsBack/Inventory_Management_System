# Login
![image](https://github.com/user-attachments/assets/b2802c68-aba6-482b-b0b5-61e55f18f787)

# Register Acc
![image](https://github.com/user-attachments/assets/84c81f8b-935c-4adf-9730-870bf704475b)

# Index
![image](https://github.com/user-attachments/assets/ab2e19f0-287e-48aa-a896-6c27ed3be0ae)

# Main Page
![image](https://github.com/user-attachments/assets/6a59b2fa-acc6-4a02-9111-4196abf4ca53)

# List
![image](https://github.com/user-attachments/assets/c955d415-7564-455a-97a2-0ee871721e96)

# All Details
![image](https://github.com/user-attachments/assets/4eb7e55e-6ca9-45c8-9865-36e8a3bbb49f)

# Student Settings
![image](https://github.com/user-attachments/assets/3525c87d-92ce-465c-8f0b-2e67731e956f)

# Student Update
![image](https://github.com/user-attachments/assets/154fe584-1342-4c20-982b-d53e97b9cbd2)

# Dashboard
![image](https://github.com/user-attachments/assets/e81e7116-5dc3-4334-94b6-416aea276a20)

```sh
NOTE: The profile picture can't be changed yet because it is still under development. (Not Responsive)
```
# Database
![image](https://github.com/user-attachments/assets/0f5a5d9c-0d74-4781-9f4b-3c5cc0842db6)

# SQL Table
```sql
CREATE DATABASE bangcoyo;

USE bangcoyo;

CREATE TABLE inventory (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profile_pic VARCHAR(255),
    age INT,
    user_info VARCHAR(255),
    gender VARCHAR(10),
    item_name VARCHAR(255),
    quantity INT,
    price INT
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);
```
