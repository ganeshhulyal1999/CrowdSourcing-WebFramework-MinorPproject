# USAGE
# python detect_blur.py --images images

# import the necessary packages
from imutils import paths
import argparse
import cv2
import os
import shutil
import ntpath
def path_leaf(path):
    head, tail = ntpath.split(path)
    return tail or ntpath.basename(head)
def variance_of_laplacian(image):
	# compute the Laplacian of the image and then return the focus
	# measure, which is simply the variance of the Laplacian
	return cv2.Laplacian(image, cv2.CV_64F).var()

# construct the argument parse and parse the arguments

# loop over the input images
subfolders=[]
subfolders = [ f.path for f in os.scandir('C:/xampp/htdocs/MinorProject/admin/photos/') if f.is_dir() ]
print(subfolders)
for z in subfolders:
	for imagePath in paths.list_images(z):
		# load the image, convert it to grayscale, and compute the
		# focus measure of the image using the Variance of Laplacian
		# method
		print(imagePath)
		image = cv2.imread(imagePath)
		gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
		fm = variance_of_laplacian(gray)
		text = "Not Blurry"
		print(fm)
		# if the focus measure is less than the supplied threshold,
		# then the image should be considered "blurry"
		if fm < 300:
			text = "Blurry"
			destination = "C:/xampp/htdocs/MinorProject/Trash/"
			#shutil.move(imagePath,destination)
			shutil.move(imagePath, os.path.join(destination, path_leaf(imagePath)))
			#shutil.copy2(imagePath, destination)

		# show the image
		#cv2.putText(image, "{}: {:.2f}".format(text, fm), (10, 30),
		#	cv2.FONT_HERSHEY_SIMPLEX, 0.8, (0, 0, 255), 3)
		#cv2.imshow("Image", image)
		#ey = cv2.waitKey(0)