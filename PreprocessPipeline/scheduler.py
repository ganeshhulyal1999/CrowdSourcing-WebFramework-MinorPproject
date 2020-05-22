from apscheduler.schedulers.blocking import BlockingScheduler
import os
import sys
import subprocess

cmds = ['echo start', 'echo mid', 'echo end']
def some_job():
   os.system('cmd /k "python imageSimilarity.py && python detect_blur.py"') 

scheduler = BlockingScheduler()
scheduler.add_job(some_job, 'interval', seconds=10)
scheduler.start()