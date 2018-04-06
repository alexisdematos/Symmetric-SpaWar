#!/usr/bin/env python
# -*- coding: utf-8 -*-

# python port of client.perl

import xmlrpclib
import datetime
import sys

url = "http://localhost:8082/RPC2"
proxy = xmlrpclib.ServerProxy(url)

text = sys.argv[1]
params = {"text":text, "align":"false", "report-all-factors":"false"}

result = proxy.translate(params)

print result['text']
