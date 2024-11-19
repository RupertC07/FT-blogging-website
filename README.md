# Blogging Website

## Problem:
Acme company wants to have a blogging website for their employees.

## Prerequisite

1. Github account
2. Git and Php installed in your personal machine
3. Fresh laravel copy. [link](https://laravel.com/docs/8.x/installation)

### Tip:
You're allowed to use any laravel starter kit for authentication to **save time**, just make sure to follow the required database structure mentioned in the instructions below. see: [https://laravel.com/docs/8.x/starter-kits](https://laravel.com/docs/8.x/starter-kits)

## Code Exam

### Requirements:  
   1. Use Laravel, or any PHP Framework you know for development
   2. You are free to use any front-end framework but just blade is okay as well. 
   3. Personal github/gitlab/bitbucket should be used. 

### Instruction

1. Fork/Copy this repository as a personal project to your OWN github account.
   1. Do not clone
2. Implement the following user stories to your blogging website
   1. As a user, I should be able to signup my account with these following requirements:
      1. Id <sup>unique</sup>
      2. Email <sup>unique</sup>
      3. Password
      4. Full name
      5. Date of Birth
   2. As a user, I should be able to login after signing up using my email and password
   3. As a user, I will be redirected to the dashboard/home page after signing in.
   4. As a user, I can post a blog posts with these following requirements:
      1. User who owns the blog post
      2. Title
      3. Description
      4. Content (Text) *bonus: Content can also be an image, video or combination of image/video and text*
      6. Creation Date
      7. Update Date
   5. As a user, I can view ALL blog posts posted by ALL users in the dashboard/home page
      1. Title
      2. Description
      3. Posted By
      4. Number of comments
      5. Pagination - *bonus
   6. As a user, I can view a specific blog post and see all the details
   7. As a user, I can delete my posted blog and cannot be viewed from the dashboard page
   8. As a user, I can edit my blog post and show when was the last update in the dashboard and view page.  
 
3. Iterations and changes should be pushed to your personal github copy of the project.

## Database Design

### Requirements:  
   1. Identify the data needed to be stored in the database
   2. Identify the proper data types to be used for the data columns

### Instruction:
   1. The repository should have the migration scripts or database included in the project.
   2. create a SQL create statement if you didn't create a migration script

## (BONUS) Project Proposal

Create a project proposal about the company, Acme Inc.'s need to have a blogging website that employees can read online.
1. Assuming that the client and you had already agreed to have a blogging website for employees but the client wants to have a formal proposal and implementation plan.
2. The client wants to know the following details
   1. Timeline
   2. Use cases
   3. Technology to be used
   4. Infrastructure 
   5. Team and their responsibilities
   6. Codebase management
   7. Cost breakdown
  
