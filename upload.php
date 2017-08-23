<!DOCTYPE html>
<html>
<head>
<title>Upload</title>
<link rel="stylesheet" type="text/css" href="css/upload.css">
</head>
<body>
<div id="header">
<img src="img/rsz_1testo.png" alt="Testo Icon" class="logo">
<button id="user";type="button";onclick="showdropdown()">Sahil56</button>
</div>
<div id="main">
<form action="upload_contest.php" method="post">
<div id="choose">
<select class="select" name="topic">
  <option value=" disabled selected">Choose Topic</option>
  <option class="soption"  value="c">C</option>
  <option class="soption"  value="c++">C++</option>
  <option class="soption"  value="java">Java</option>
  <option class="soption"  value="python">Python</option>
  <option class="soption"  value="php">Php</option>
  <option class="soption"  value="sql">Sql</option>
  <option class="soption"  value="android">Android</option>
  <option class="soption"  value="ajax">Ajax</option>
  <option class="soption"  value="ruby">Ruby</option>
</select>
<select class="select" name="contest">
  <option value="disabled selected">Choose Sub-topic</option>
  <option class="soption" value="arrays">Array</option>
  <option class="soption" value="pointers">Pointers</option>
  <option class="soption" value="loops">Loops</option>
  <option class="soption" value="conditions">Conditions</option>
</select>
<i class="instruction">[You must fill up all 10 questions.]</i>
</div>

<div id="content">
<div class="question">
<div>
<textarea rows="4" placeholder="1. Enter Question..." class="quesArea" name="1"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="1A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="1B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="1C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="1D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="1q" value="a">A |
  <input type="radio" name="1q" value="b">B |
  <input type="radio" name="1q" value="c">C |
  <input type="radio" name="1q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="2. Enter Question..." class="quesArea" name="2"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="2A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="2B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="2C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="2D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="2q" value="a">A |
  <input type="radio" name="2q" value="b">B |
  <input type="radio" name="2q" value="c">C |
  <input type="radio" name="2q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="3. Enter Question..." class="quesArea" name="3"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="3A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="3B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="3C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="3D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="3q" value="a">A |
  <input type="radio" name="3q" value="b">B |
  <input type="radio" name="3q" value="c">C |
  <input type="radio" name="3q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="4. Enter Question..." class="quesArea" name="4"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="4A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="4B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="4C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="4D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="4q" value="a">A |
  <input type="radio" name="4q" value="b">B |
  <input type="radio" name="4q" value="c">C |
  <input type="radio" name="4q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="5. Enter Question..." class="quesArea" name="5"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="5A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="5B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="5C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="5D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="5q" value="a">A |
  <input type="radio" name="5q" value="b">B |
  <input type="radio" name="5q" value="c">C |
  <input type="radio" name="5q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="6. Enter Question..." class="quesArea" name="6"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="6A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="6B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="6C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="6D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="6q" value="a">A |
  <input type="radio" name="6q" value="b">B |
  <input type="radio" name="6q" value="c">C |
  <input type="radio" name="6q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="7. Enter Question..." class="quesArea" name="7"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="7A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="7B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="7C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="7D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="7q" value="a">A |
  <input type="radio" name="7q" value="b">B |
  <input type="radio" name="7q" value="c">C |
  <input type="radio" name="7q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="8. Enter Question..." class="quesArea" name="8"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="8A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="8B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="8C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="8D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="8q" value="a">A |
  <input type="radio" name="8q" value="b">B |
  <input type="radio" name="8q" value="c">C |
  <input type="radio" name="8q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="9. Enter Question..." class="quesArea" name="9"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="9A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="9B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="9C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="9D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="9q" value="a">A |
  <input type="radio" name="9q" value="b">B |
  <input type="radio" name="9q" value="c">C |
  <input type="radio" name="9q" value="d">D |

</div>
<hr>
</div>
<div class="question">
<div>
<textarea rows="4" placeholder="10. Enter Question..." class="quesArea" name="10"></textarea>
</div>
<textarea class="option" rows="2" placeholder="Option A..." name="10A"></textarea>
<textarea class="right option" rows="2" placeholder="Option B..." name="10B"></textarea>
<textarea class="option" rows="2" placeholder="Option C..." name="10C"></textarea>
<textarea class="right option" rows="2" placeholder="Option D..." name="10D"></textarea>
<div class="formdiv">
Correct Option : 

  <input type="radio" name="10q" value="a">A |
  <input type="radio" name="10q" value="b">B |
  <input type="radio" name="10q" value="c">C |
  <input type="radio" name="10q" value="d">D |

</div>
<hr>
</div>
</div>
<div id="bottom">
<button class="normal" id="submit";type="button">Submit</button>
</div>
</form>
</div>
</body>
</html>