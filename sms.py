# -*- coding: utf-8 -*-
import plivo

auth_id = "MANTUYZWRKYTKXN2NJOT"
auth_token = "N2Q1NjU1ODJlMzVkYWRkNDc1ZTkyODU1ZWVkN2M5"

p = plivo.RestAPI(auth_id, auth_token)
to=910000000000+input("Enter the recepient number without country code : ")
message=raw_input("Enter the Message : ")
print to,message
params = {
    'src': '919247755288', # Sender's phone number with country code
    'dst' : to, # Receiver's phone Number with country code
    'text' : message, # Your SMS Text Message - English
#   'text' : u"こんにちは、元気ですか？" # Your SMS Text Message - Japanese
#   'text' : u"Ce est texte généré aléatoirement" # Your SMS Text Message - French
    'url' : "http://example.com/report/", # The URL to which with the status of the message is sent
    'method' : 'POST' # The method used to call the url
}

response = p.send_message(params)

# Prints the complete response
print str(response)

# Sample successful output
# (202,
#       {
#               u'message': u'message(s) queued',
#               u'message_uuid': [u'b795906a-8a79-11e4-9bd8-22000afa12b9'],
#               u'api_id': u'b77af520-8a79-11e4-b153-22000abcaa64'
#       }
# )

# Prints only the status code
print str(response[0])

# Sample successful output
# 202

# Prints the message details
print str(response[1])

# Sample successful output
# {
#       u'message': u'message(s) queued',
#       u'message_uuid': [u'b795906a-8a79-11e4-9bd8-22000afa12b9'],
#       u'api_id': u'b77af520-8a79-11e4-b153-22000abcaa64'
# }

# Print the message_uuid
print str(response[1]['message_uuid'])

# Sample successful output
# [u'b795906a-8a79-11e4-9bd8-22000afa12b9']

# Print the api_id
print str(response[1]['api_id'])

# Sample successful output
# b77af520-8a79-11e4-b153-22000abcaa64
