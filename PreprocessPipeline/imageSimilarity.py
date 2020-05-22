from skimage.metrics import structural_similarity as ssim
import shutil
import os
import cv2
from PIL import Image  
import PIL  
subfolders=[]
subfolders = [ f.path for f in os.scandir('C:/xampp/htdocs/MinorProject/admin/photos/') if f.is_dir() ]
print(subfolders)
for z in subfolders:
    dir=z+"/"
    arr=os.listdir(z+"/")
    def compare():
        arr=os.listdir(z+"/")
        for i in arr:
            for j in arr:
                if(i!=j):
                    print(dir+i)
                    print(dir+j)
                    image1 = cv2.imread(dir+i)
                    image2 = cv2.imread(dir+j)
                    image1_gray = cv2.cvtColor(image1, cv2.COLOR_BGR2GRAY)
                    image2_gray = cv2.cvtColor(image2, cv2.COLOR_BGR2GRAY)
                    (score, diff) = ssim(image1_gray, image2_gray, full=True)
                    print("Image similarity:", score)
                    if(score<0.80):
                        print("Similar Image")
                    else:
                        print("Not Similar")
                        destination = "C:/xampp/htdocs/MinorProject/Trash/"
                        image_path = z+"/" + i
                        try:
                            shutil.move(image_path, destination)
                        except:
                            shutil.move(os.path.join(z+"/", i), os.path.join(destination, i))
                        break
                        diff = (diff * 255).astype("uint8")

                    #cv2.imshow('diff', diff)
                        cv2.waitKey()
            arr=os.listdir(z+"/")

    def resize():
        arr=os.listdir(z+"/")
        for j in arr:
            img = cv2.imread(z+"/"+j, cv2.IMREAD_UNCHANGED)
            print('Original Dimensions : ',img.shape)
            scale_percent = 60 # percent of original size
            width = 500
            height = 500
            dim = (width, height)
            # resize image
            resized = cv2.resize(img, dim, interpolation = cv2.INTER_AREA)
            cv2.imwrite(z+"/"+j, resized)
            print('Resized Dimensions : ',resized.shape)
            cv2.waitKey(0)
            cv2.destroyAllWindows() 
    if __name__ == "__main__":
        resize()
        compare()
