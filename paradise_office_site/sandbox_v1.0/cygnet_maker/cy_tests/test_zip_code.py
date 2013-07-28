#!/usr/bin/python3.3

import unittest
import sys
sys.path.append("/home/hazel/Documents/new_linux_paradise/paradise_office_site/sandbox_v1.0/cygnet_maker/cy_data_validation")
from zip_code import ZipCode

class ZipCodeTestCase(unittest.TestCase):
  ''' Tests with numbered degrees of bad or good data, on a scale of 0=baddest to 10=goodest '''

  def setUp(self):
    self.code = ZipCode.check_zipcode("")

  # Zips are 5 nums, with optional - and 4 nums. No letters

  def tearDown(self):
    self.real = ""
    correct_real = 0.0

if __name__ == '__main__':
  unittest.main()
