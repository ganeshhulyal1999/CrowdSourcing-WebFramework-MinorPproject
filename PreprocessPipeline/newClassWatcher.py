import time
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler
import shutil
import os


source = 'C:/xampp/htdocs/MinorProject/NewModels/'
dest1 = 'C:/xampp/htdocs/MinorProject/BackupModels/'

class Watcher:
    DIRECTORY_TO_WATCH = "C:/xampp/htdocs/MinorProject/admin/photos/"

    def __init__(self):
        self.observer = Observer()

    def run(self):
        event_handler = Handler()
        self.observer.schedule(event_handler, self.DIRECTORY_TO_WATCH, recursive=True)
        self.observer.start()
        try:
            while True:
                time.sleep(5)
        except:
            self.observer.stop()
            print ("Error")

        self.observer.join()


class Handler(FileSystemEventHandler):

    @staticmethod
    def on_any_event(event):
        if event.is_directory:
            return None

        elif event.event_type == 'created':
            # Take any action here when a file is first created.
            print ("Received created event - %s." % event.src_path)
            os.system('cmd /k "python imageSimilarity.py && python detect_blur.py && conda activate tensorflow_env && python C:/xampp/htdocs/MinorProject/TrainingPipeline/Tensorflow-for-poets-in-windows/retrain.py --output_graph=C:/xampp/htdocs/MinorProject/NewModels/output_graph.pb  --output_labels=C:/xampp/htdocs/MinorProject/NewModels/output_labels.txt --image_dir=C:/xampp/htdocs/MinorProject/admin/photos/"') 
            

        elif event.event_type == 'modified':
            # Taken any action here when a file is modified.
            print ("Received modified event - %s." % event.src_path)
            os.system('cmd /k "python imageSimilarity.py && python detect_blur.py && conda activate tensorflow_env && python C:/xampp/htdocs/MinorProject/TrainingPipeline/Tensorflow-for-poets-in-windows/retrain.py --output_graph=C:/xampp/htdocs/MinorProject/NewModels/output_graph.pb  --output_labels=C:/xampp/htdocs/MinorProject/NewModels/output_labels.txt --image_dir=C:/xampp/htdocs/MinorProject/admin/photos/"') 

if __name__ == '__main__':
    w = Watcher()
    w.run()