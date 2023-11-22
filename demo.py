import smtplib
  
# creates SMTP session
s = smtplib.SMTP('smtp.gmail.com', 587)
  
# start TLS for security
s.starttls()
  
# Authentication
s.login("vishwajeet6254@gmail.com", "51Pawar51@")
  
# message to be sent
message = "Y D Z V"
  
# sending the mail
for i in range(10):
    s.sendmail("vishwajeet6254@gmail.com", "aryanbagane30@gmail.com", message)
  
# terminating the session
s.quit()