import os

os.system("cp img.zip output/img.zip")
os.system("unzip output/img.zip -d output/")
os.system("unlink output/img.zip")
os.system("rm -R output/__MACOSX")
os.system("rm -R output/.DS_Store")
os.system("rm -R output/img/.DS_Store")
