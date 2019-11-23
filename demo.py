
from tkinter import *
from tkinter import ttk
import os
from PIL import ImageTk,Image

main_screen=Tk()
main_screen.geometry("800x600") # set the configuration of GUI window 
main_screen.title("Health Monitoring System") # set the title of GUI window

def patient_login():

    global login_screen1
    login_screen1 = Toplevel(main_screen)
    login_screen1.title("Health Monitoring System")
    login_screen1.geometry("800x600")

    global username_verify
    global password_verify
 
    username_verify = StringVar()
    password_verify = StringVar()
 
    

    c=Canvas(login_screen1,width=800,height=600)
    c.pack()
    image=PhotoImage(file="C:\\Users\\lenovo\\Documents\\python project\\health1.png")
    c.create_image(350,300,anchor="center",image=image)


    label=Label(login_screen1, text="Username",anchor=CENTER,justify=CENTER,font=('Times New Roman',14,'bold'),state=NORMAL)
    label.configure(width=15,height=2)
    label=c.create_window(350,250,anchor=SE,window=label)

    

    label1=Label(login_screen1, text="Password",anchor=CENTER,justify=CENTER,font=('Times New Roman',14,'bold'),state=NORMAL)
    label1.configure(width=15,height=2)
    label1=c.create_window(350,350,anchor=SE,window=label1)

    
    label2=Label(login_screen1, text="PATIENT LOGIN",anchor=CENTER,justify=CENTER,font=('Times New Roman',14,'bold'),state=NORMAL)
    label2.configure(width=25,height=2)
    label2=c.create_window(530,150,anchor=SE,window=label2)

    entry=Entry(c, textvariable=username_verify)
    c.create_window(450,225,window=entry,height=25,width=200)
    

    entry1=Entry(c, textvariable=password_verify)
    c.create_window(450,325,window=entry1,height=25,width=200)


    b=Button(login_screen1, text="SUBMIT",anchor=CENTER,justify=CENTER,font=('calibri',12,'bold'))
    b.configure(width=20,height=2)
    b_w=c.create_window(400,425,anchor=CENTER,window=b)
 




def doctor_login():

    global login_screen1
    login_screen1 = Toplevel(main_screen)
    login_screen1.title("Health Monitoring System")
    login_screen1.geometry("800x600")

    global username_verify
    global password_verify
 
    username_verify = StringVar()
    password_verify = StringVar()
 
    

    c=Canvas(login_screen1,width=800,height=600)
    c.pack()
    image=PhotoImage(file="C:\\Users\\lenovo\\Documents\\python project\\health1.png")
    c.create_image(350,300,anchor="center",image=image)


    label=Label(login_screen1, text="Username",anchor=CENTER,justify=CENTER,font=('Times New Roman',14,'bold'),state=NORMAL)
    label.configure(width=15,height=2)
    label=c.create_window(350,250,anchor=SE,window=label)

    

    label1=Label(login_screen1, text="Password",anchor=CENTER,justify=CENTER,font=('Times New Roman',14,'bold'),state=NORMAL)
    label1.configure(width=15,height=2)
    label1=c.create_window(350,350,anchor=SE,window=label1)

    
    label2=Label(login_screen1, text="DOCTOR LOGIN",anchor=CENTER,justify=CENTER,font=('Times New Roman',14,'bold'),state=NORMAL)
    label2.configure(width=25,height=2)
    label2=c.create_window(530,150,anchor=SE,window=label2)

    entry=Entry(c, textvariable=username_verify)
    c.create_window(450,225,window=entry,height=25,width=200)
    

    entry1=Entry(c, textvariable=password_verify)
    c.create_window(450,325,window=entry1,height=25,width=200)


    b=Button(login_screen1, text="SUBMIT",anchor=CENTER,justify=CENTER,font=('calibri',12,'bold'))
    b.configure(width=20,height=2)
    b_w=c.create_window(400,425,anchor=CENTER,window=b)
 


def login_page():
    
    global login_screen
    login_screen = Toplevel()
    login_screen.title("Health Monitoring System")
    login_screen.geometry("800x600")
    
    c1=Canvas(login_screen,width=800,height=600,bg="white")
    c1.pack()
    image1=PhotoImage(file="C:\\Users\\lenovo\\Documents\\python project\\health1.png")
    c1.create_image(0,0,anchor="nw",image=image1)
    

    button11=Button(login_screen, text="DOCTOR LOGIN",command=doctor_login,anchor=CENTER,justify=CENTER,font=('calibri',12,'bold'),state=NORMAL,bg='#add8e6')
    button11.configure(width=20,height=2)
    button_window11=c1.create_window(480,250,anchor=SE,window=button11)

    button12=Button(login_screen, text="PATIENT LOGIN",command=patient_login,anchor=CENTER,justify=CENTER,font=('calibri',12,'bold'),state=NORMAL,bg='#add8e6')
    button12.configure(width=20,height=2)
    button_window12=c1.create_window(480,350,anchor=SE,window=button12)

    button13=Button(login_screen, text="Back",anchor=CENTER,justify=CENTER,font=('calibri',12,'bold'),state=NORMAL,bg='#add8e6',command=login_screen.destroy)
    button13.configure(width=10,height=2)
    button_window13=c1.create_window(100,100,anchor=SE,window=button13)
    




c=Canvas(main_screen,width=800,height=600,bg="white")
c.pack()
image=PhotoImage(file="C:\\Users\\lenovo\\Documents\\python project\\health1.png")
c.create_image(350,300,anchor="center",image=image)

button=Button(main_screen, text="LOGIN",anchor=S,justify=CENTER,font=('calibri',12,'bold'),command=login_page,activebackground='#add8e6',bd=0)
button.configure(width=10,height=2)
button_window=c.create_window(800,30,anchor=SE,window=button)

button1=Button(main_screen, text="SIGN UP",anchor=S,justify=CENTER,font=('calibri',12,'bold'),state=NORMAL,bg='#add8e6')
button1.configure(width=10,height=2)
button_window1=c.create_window(700,30,anchor=SE,window=button1)



main_screen.mainloop()










