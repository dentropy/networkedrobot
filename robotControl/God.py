
import serial
import time
connected = False
ser = serial.Serial("/dev/ttyACM0", 9600)
time.sleep(5)
while not connected:
    serin = ser.read()
    connected = True
while True:
	txt_file = open("newfile.txt")
	a = txt_file.read()
	if (a == "FORWARD"):
		ser.write("1")
		time.sleep(2)
	elif(a == "BACKWARD"):
		ser.write("2")
		time.sleep(2)
	elif(a == "RELEASE"):
		ser.write("3")
		time.sleep(2)
	elif(a == "RIGHT"):
		ser.write("4")
		time.sleep(2)
	elif(a == "LEFT"):
		ser.write("5")
		time.sleep(2)
