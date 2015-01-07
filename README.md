# Dan J. Mendoza Job Listing Tool

This project is designed to showcase my personal experiance, and includes a short bio, a portfolio page
to show the types of projects I have worked on as well as an example of my coding ability.

## Documentation
The site is split into three major sections
* http://www.danjmendoza.com/ is the bio page telling a bit about me.
* http://www.danjmendoza.com/portfolio is the portfolio page categorizing and showing a sample of work I have done
* http://www.danjmendoza.com/jobs is the application that allows for me to keep track of and jobs that I have applied for.

## Jobs API
I have setup a simple RESTful API using the Kohana PHP framework for working with jobs. All requests and responses use
the json format for data. The frontend uses angularjs to handles the server calls. It also uses it's own templating engine 
for some parts of the application.
### GET
* /v1/jobs - returns all active jobs as JSON

### POST
* /v1/jobs/ - Creates a new job and expects job data to be sent along with it

### PUT
* /v1/jobs/{job_id} - Updates a job with paramaters that are sent with the request

### DELETE
* /v1/jobs/{job_id} - Removes a job from the database and application.

POST, PUT and DELETE requests return the job in the following format:
```javascript
{
	id: 1,
	title: 'Job Title',
	link: 'http://www.company.com/job',
	coverletter: 'Unique coverletter sent with appliacation',
	status: 'active',
	progress: 'app sent'
	company: {
		id: 1,
		title: 'Company Name',
		website: 'http://www.company.com'
	}
}
```

## Relevant files
If you are reviewing this code, the most relevant files are those associated with the jobs application.
Those files can be categorized into the front end application, and the backend.
### Frontend files
* /app/* - AngularJS files for MVC on frontend of the site.
* /application/classes/Controller/Jobs.php - Simple file that just loads the view for direct links.
* /application/views/jobs.php - Initial view file.

### Backend API files
* /application/classes/Controller/V1/Jobs.php - Handles RESTful
* /application/classes/Jobs.php - Takes care of reading writing Jobs to/from the database
* /application/classes/Company.php - Takes care of reading writing Companies to/from the database
* /application/classes/Model/* - ORM for database.

## Todo
I still need to setup Form validation and would like to cleanup the UI for the jobs page.