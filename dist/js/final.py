import serial
import time
import requests

session = requests.Session()

ser = serial.Serial('COM4', 9600)
time.sleep(2)

url = 'http://localhost/capstone_project_final_version/php/insert.php'
api_key = 'W5qM3sE7gP1aK9jR4fY6lC2zX8wB0vN3dF6xH1tG2uL4iV9oU5yJ7cQ8hT4nZ7eD9bI0pA3mR8kS6oV1fC2xN4uG5lW6jQ9dX2yH3tF7wE8zB1vM0iK'  

try:
    while True:
        data = ser.readline().decode().strip() 
        water_flow, water_level, acidity, tds, temperature = data.split(',')
        
        params = {
            'waterflow': water_flow,
            'waterlevel': water_level,
            'acidity': acidity,
            'tds': tds,
            'temperature': temperature,
            'api_key': api_key 
        }

        response = session.get(url, params=params)

        print("URL accessed:", response.url)
except KeyboardInterrupt:
    ser.close()
    print("Serial port closed.")
