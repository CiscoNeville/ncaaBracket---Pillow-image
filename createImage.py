#!/usr/bin/python
#create image for FB share post

from PIL import Image


#for first test image use this final Four
#Duke, NorthCarolina, Kansas, UCLA
#Duke beats NC, KU beats UCLA
#Duke beats KU

team1 = "Duke"
team2 = "NC"
team3 = "Kansas"
team4 = "UCLA"



im1 = Image.open("/home/neville/pillow/50x50logos/DUKE.png")
im2 = Image.open("/home/neville/pillow/50x50logos/NC.png")
im3 = Image.open("/home/neville/pillow/50x50logos/KANSAS.png")
im4 = Image.open("/home/neville/pillow/50x50logos/UCLA.png")


#print(im1.format, im1.size, im1.mode)


#create the blank sharing image
im = Image.new("RGBA",(824,471),"white")

outfile = "/home/neville/pillow/FinalFourImages/" + team1 + team2 + team3 + team4 + ".jpg"

box1 = (5,20, 55,70)

im.paste(im1,box1)

im.save(outfile,"JPEG")






