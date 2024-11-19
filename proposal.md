# Blogging Website for Acme Inc.

This project aims to create an internal blogging platform for Acme Inc. employees to share ideas, updates, and experiences. Below is the formal proposal for implementation.

---

## **Timeline**

The project is planned to take **3 months**, with the following phases:

1. **Phase 1: Design & Planning (Weeks 1-2)**
   - Finalize requirements and use cases.
   - Create UI/UX wireframes.
   - Define the database schema and API endpoints.
   - Set up infrastructure and CI/CD pipelines.

2. **Phase 2: Development (Weeks 3-8)**
   - Backend development using Laravel for API creation.
   - Frontend development using Next.js.
   - Core feature implementation:
     - User authentication.
     - Blog posting, editing, and viewing.

3. **Phase 3: Testing and Deployment (Weeks 9-12)**
   - Unit, integration, and system testing.
   - Security and load testing.
   - Refinement based on QA feedback.
   - Deployment to AWS cloud hosting and handover.

---

## **Use Cases**

The blogging platform will include the following features:

1. **Authentication**
   - Employees can register and log in securely.
2. **Dashboard**
   - View all blog posts with pagination.
   - Display author and comment details.
3. **Create/Edit Blogs**
   - Employees can post blogs with text, images, or videos.
   - Update or delete their posts.
4. **View Blogs**
   - View blog details and comments.
5. **Admin Features (Optional)**
   - Manage users and moderate blog content (future enhancement).

---

## **Technology Stack**

1. **Backend**: Laravel (REST API).
2. **Frontend**: Next.js (React-based).
3. **Database**: PostgreSQL.
4. **Hosting**: AWS (Cloud hosting).
5. **Proxy Server**: Secure API requests and frontend-backend communication.

---

## **Infrastructure**

- **Frontend**: Hosted separately with a proxy server to secure API requests.
- **Backend**: Laravel API hosted on AWS.
- **Database**: PostgreSQL for efficient relational data management.

---

## **Team and Responsibilities**

1. **Project Manager (PM)**: Oversee project progress and coordination.
2. **System/Business Analyst (BA)**: Gather requirements and validate workflows.
3. **Designer**: Create user-friendly UI/UX designs.
4. **2 Full Stack Developers**: Build and maintain frontend and backend.
5. **2 QA Engineers**: Ensure application quality through thorough testing.

---

## **Codebase Management**

1. **Version Control**: GitHub will be used for source control.
2. **Branching Strategy**:
   - **Main**: Stable production-ready code.
   - **Develop**: Active development branch.
   - **Feature**: Separate branches for new features.
3. **Code Reviews**: Code changes will be reviewed via pull requests.
4. **CI/CD Pipelines**: Automated deployments to AWS.

---

## **Cost Breakdown**

1. **Personnel Costs**:
   - **2 Full Stack Developers**: ₱40,000/month each.
   - **2 QA Engineers**: ₱30,000/month each.
   - **Designer**: ₱25,000/month.
   - **PM**: ₱50,000/month.
   - **BA**: ₱40,000/month.
   - **Total (3 months)**: **₱750,000**.

2. **Infrastructure Costs**:
   - **AWS Hosting**: ₱5,000/month.
   - **PostgreSQL Hosting**: ₱3,000/month.
   - **Total (3 months)**: **₱24,000**.

3. **Miscellaneous**:
   - Tools, software, and licenses: **₱30,000**.

**Grand Total**: **₱804,000**.