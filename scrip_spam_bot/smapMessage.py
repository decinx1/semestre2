import pyautogui as pg
import time 

#A script was made with which you can spam, it is made up of 2 libraries.
#PyAutoGUI: lets your Python scripts control the mouse and keyboard to automate interactions with other applications.
#TIME: time module allows to work with time in Python. It allows functionality like getting the current time, pausing the Program from executing.
time.sleep(5)

for i in range(100):
    pg.write("tqm")
    pg.press('enter')