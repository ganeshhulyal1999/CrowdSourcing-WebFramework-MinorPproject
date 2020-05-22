from apscheduler.schedulers.blocking import BlockingScheduler
import os
import sys
import subprocess

cmds = ['echo start', 'echo mid', 'echo end']
def some_job():
   os.system('cmd /k "python C:/xampp/htdocs/MinorProject/TrainingPipeline/Tensorflow-for-poets-in-windows/retrain.py --output_graph=C:/xampp/htdocs/MinorProject/NewModels/output_graph.pb  --output_labels=C:/xampp/htdocs/MinorProject/NewModels/output_labels.txt --image_dir=C:/xampp/htdocs/MinorProject/admin/photos/"') 

scheduler = BlockingScheduler()
scheduler.add_job(some_job, 'interval', seconds=5)
scheduler.start()