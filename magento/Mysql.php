<?php

/**
  * Write SQL debug data to file
  *
  * @var bool
  */
 protected $_debug               = false;
 /**
  * Minimum query duration time to be logged
  *
  * @var unknown_type
  */
 protected $_logQueryTime        = 0.05;
 /**
  * Log all queries (ignored minimum query duration time)
  *
  * @var bool
  */
 protected $_logAllQueries       = false;
 /**
  * Add to log call stack data (backtrace)
  *
  * @var bool
  */
 protected $_logCallStack        = false;
 /**
  * Path to SQL debug data log
  *
  * @var string
  */
 protected $_debugFile           = 'var/debug/sql.txt';
