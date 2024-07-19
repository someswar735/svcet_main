<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Calendar - Mechanical Engineering</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
        }
        .header {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
            margin-top:-300px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .content {
            font-size: 18px;
        }
        .all-content {
            margin-top: -290px;
            margin-left: 80px;
        }
        .col-md-3 {
            width: 30%;
            margin-top: 180px;
            margin-left: 10px;
            margin-right: 10px;
            height: 100%;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
<div class="row">
        <?php include "mechmenu.php"; ?>
    </div>  
    <div class="container">
        <div class="header">Academic Calendar - Mechanical Engineering</div>
        
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                    <th>No. of Working Days</th>
                    <th>Student Activity</th>
                    <th>Department Activities</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="6">JUNE</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>6</td>
                    <td colspan="2">12: Commencement of classwork II yr & III yr</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>6</td>
                    <td colspan="2">19: Commencement of classwork IV yr</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td></td>
                    <td></td>
                    <td>5</td>
                    <td colspan="2">26: Ramzan</td>
                </tr>
                <tr>
                    <td rowspan="4">JULY</td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td rowspan="4">6</td>
                    <td>12: Parent Meet</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="3">AUGUST</td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td></td>
                    <td colspan="2">4: Feedback on Syllabus Completion<br>23: Industrial Visit<br>26: Guest Lecture</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td></td>
                    <td>07-12: I mid for II & III yrs</td>
                    <td></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td></td>
                    <td>15: Independence Day<br>14-21: I mid for IV yr</td>
                    <td></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td></td>
                    <td>25: Vinayaka Chaviti</td>
                    <td></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Month</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                    <th>No. of Working Days</th>
                    <th>Student Activity</th>
                    <th>Department Activities</th>
                </tr>
            </thead>
            <tbody>
                <!-- SEPTEMBER -->
                <tr>
                    <td rowspan="5">SEPTEMBER</td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td></td>
                    <td>6</td>
                    <td>20</td>
                    <td>6</td>
                    <td></td>
                    <td>Dept. Staff Meeting</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>5</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td></td>
                    <td>5</td>
                    <td></td>
                    <td>30: Vijaya Dasami</td>
                </tr>

                <!-- OCTOBER -->
                <tr>
                    <td rowspan="5">OCTOBER</td>
                    <td></td>
                    <td>1</td>
                    <td></td>
                    <td>1</td>
                    <td></td>
                    <td>4</td>
                    <td>18</td>
                    <td>4</td>
                    <td></td>
                    <td>Dept. Staff Meeting</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>4</td>
                    <td></td>
                    <td>2: Gandhi Jayanthi</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>6</td>
                    <td></td>
                    <td>9-14: II mid for II & III yrs</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>5</td>
                    <td></td>
                    <td>16-23: II mid for IV yr<br>16-12: Practicals for II & III yrs<br>19: Diwali</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>6</td>
                    <td></td>
                    <td>23-28: Practicals for IV yr<br>23-04: End Exams for II & III yrs</td>
                </tr>
                
                <!-- NOVEMBER -->
                <tr>
                    <td rowspan="4">NOVEMBER</td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td></td>
                    <td>1</td>
                    <td></td>
                    <td>Dept. Staff Meeting</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>5</td>
                    <td></td>
                    <td>30-11: End examinations for IV yr</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="8">TOTAL NO. OF WORKING DAYS FOR THE ACADEMIC YEAR</td>
                    <td>122</td>
                    <td></td>
                </tr>
       
            </tbody>
        </table>
    </div>
</body>
</html>

    
    <?php include 'footer.php'; ?>
</body>
</html>